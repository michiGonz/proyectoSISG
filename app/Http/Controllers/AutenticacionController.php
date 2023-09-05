<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;
use App\Models\User;
use DB;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AutenticacionController extends Controller
{
    protected function getLogin()
    {
        return view('auth.login');
    }

/**
 * Log the user out of the application.
 */
public function logout(Request $request): RedirectResponse
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}


    public function postLogin(Request $request)
    {
        //dd($request->all());

        // ---- validar que mo hayan campos vacios en en sistema-----//
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'El Email es requerido',
            'password.required' => 'Debe de ingresar la Contraseña',
        ]);


        if ($validator->fails()) {
            return redirect('/login')
            ->withErrors($validator)
            ->withInput();
        } else {
            //dd('qui');

            //---------Primero busco el usuario en la base de datos local para agilizar el proceso---------//
            $user = $request->email;
            //$cantidad_user = User::where('username', 'like', $user)->count();
//dd($cantidad_user);



            //if ($cantidad_user >= 1) { // si el usuario esta en la base de datos entonces proceso autenticarlo
                //dd($cantidad_user);
                //return $this->autenticar($request);
            //} else { // si no, lo busco en el directorio activo
                $resultado_bind = false;
                //$link = true;
                $link = ldap_connect(Config::get('configLDAP.options.LDAP_HOSTIP'));

                if ($link==true) {
                    if (Config::get('configLDAP.options.use_ldap') == true) {
                        ldap_set_option($link, LDAP_OPT_PROTOCOL_VERSION, 3);
                    }
                    $user = $request->email . '@QUIRIQUIREGAS.COM';
                    $clave = $request->password;

                    if (Config::get('configLDAP.options.use_ldap') == true) {
                        $resultado_bind = @ldap_bind($link, $user, $clave); //el @ es para ocultar los errores cuando las credenciales no son validas
                    } else {
                        $resultado_bind = false;
                    }
                    if ($resultado_bind == true) {

                        $filter = "(sAMAccountName=" . $request->email . ")";
                        $attr = array("memberof", "name", "sAMAccountName");
                        $result = ldap_search($link, Config::get('configLDAP.options.LDAP_DN'), $filter, $attr) or exit("Unable to search LDAP server");
                        $entries = ldap_get_entries($link, $result);
                        $ldap_nombre = $entries[0]['name'][0];
                        $usernameLDAP = $entries[0]['samaccountname'][0];

//dd($usernameLDAP);

                        $cantidad_user = User::where('username', '=', $usernameLDAP)->count();

                        if ($cantidad_user != '1') { // agrego el usuario si no se encuentra en la base de datos
                            $apellidoYnombre=explode(',',$ldap_nombre); //array que contiene apellido y nombre en ese orden, leido de active directory
                            //dd($apellidoYnombre);

                            /* POSIBLES ERRORES ENCONTRADOS, EL APELLIDO Y NOMBRE NO ESTAN SEPARADOS POR , EN EL DIRECCORIO ACTIVO Y PUES GENERA ERROR AL MOMENTO
                            DE SEPARAR CON EXPLODE*/

                            $apellidoYnombre[0]= trim($apellidoYnombre[0]);//array que contiene apellido y nombre en ese orden, leido de active directory
                            $apellidoYnombre[1]= trim($apellidoYnombre[1]);//array que contiene apellido y nombre en ese orden, leido de active directory

                            DB::beginTransaction();
                            $user = new User($request->all());
                            $user->fill(['username' => $usernameLDAP,
                            'name' => $apellidoYnombre[1].' - '.$apellidoYnombre[0]]);
                            $user->password = bcrypt($request->password);
                            $user->save();
                            DB::commit();
                        }else{
                            /* actualizo la contraseña */
                            $user = User::where('username', 'like', $request->email)->first();
                            $user->password = bcrypt($request->password);
                            $user->save();
                            /* actualizo la contraseña */
                        }

                        return $this->autenticar($request);

                    } else {
                        return $this->autenticar($request);
                    }
                }
            }
        }

    //}

    public function autenticar(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'El Email es requerido',
            'password.required' => 'Debe de ingresar la Contraseña',
        ]);

        if (Auth::attempt(request()->except(['_token']))) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
