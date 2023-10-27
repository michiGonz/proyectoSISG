<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicadorplan;


class IndicadorplanController extends Controller {
    public function index() {
        $indicadorplanes = Indicadorplan::get();
        $planes = [];
        foreach ($indicadorplanes as $indicadorplan) {
            switch ($indicadorplan['nombre_indicador']) {
                case 'opsa':
                    $indicadorplan['nombre']='Opsa';
                    break;
                case 'simulacro':
                    $indicadorplan['nombre']='Simulacro';
                    $indicadorplan['date'] = json_decode($indicadorplan['date']);
                    break;
                case 'comite':
                    $indicadorplan['nombre']='Comité';
                    $indicadorplan['date'] = json_decode($indicadorplan['date']);
                    break;
                case 'plan':
                    $indicadorplan['nombre']='Plan de formación de seguridad salud y ambiente';
                    break;
                case 'parametros_ambientales':  // EN REVISIÓN
                    $indicadorplan['nombre']='Parámetros ambientales';
                    break;
                case 'visita':
                    $indicadorplan['nombre']='Visita geranial';
                    $indicadorplan['date'] = json_decode($indicadorplan['date']);
                    break;
                case 'auditoria':  // EN REVISIÓN
                    $indicadorplan['nombre']='Auditoria de trabajo';
                    break;
                case 'aprendiendo':
                    $indicadorplan['nombre']='Aprendiendo en el trabajo';
                    break;
                case 'monitoreo':
                    $indicadorplan['nombre']='Monitoreo ambiental';
                    break;
                case 'jornada':
                    $indicadorplan['nombre']='Jornada ambiental';
                    break;
                    default:
                    $indicadorplan['nombre']='Indicador';
                    $indicadorplan['date']=[];
                    break;
                    case 'parametros_ambientales':
                        $indicadorplan['nombre']='Parametros ambiental';
                        $indicadorplan['PROD']='Producción';
                        $indicadorplan['MTTO']='Mantenimiento';
                        $indicadorplan['CC']='Producción'; 
                        $indicadorplan['SG']='Servicios Generales';
                        $indicadorplan['SSII']='Sistema de Información';
                        $indicadorplan['SC']='Seguridad Corporativa';
                        break;
            }
            $planes[] = $indicadorplan;
        }
        $indicadorplanes = $planes;
        //return response()->json(json_decode($indicadorplan[2]->date)[0]);
        return view('indicadorplan.index', compact('indicadorplanes'));
    }

    public function create() {
        $indicadorplan = Indicadorplan::all();
        return view('indicadorplan.create', compact('indicadorplan'));
    }

    public function store(Request $request) {
        $plan = new Indicadorplan($request->all());

        switch ($request->nombre_indicador) {
            case 'opsa':
                break;
            case 'simulacro':
                $date = [];
                foreach ($plan->date as $clave => $valor) {
                    $date[$clave] = ['name' => $request->name_date[$clave], 'date' => $valor];
                }
                $plan->date = json_encode($date);
                break;
            case 'comite':
                $date = [];
                foreach ($plan->date as $clave => $valor) {
                    $date[$clave] = ['reunion' => $request->name_date[$clave], 'entrega' => $valor];
                }
                $plan->date = json_encode($date);
                break;
            case 'plan':
                $dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
                $plan->date = $dias[$request->charla_dia];
                break;
            case 'parametros_ambientales':  // EN REVISIÓN
                $uf = [''];
                $plan->uf = $uf[$request->uf];
                break;
            case 'visita':
                $date = [];
                foreach ($plan->date as $clave => $valor) {
                    $date[$clave] = ['name' => $request->name_date[$clave], 'date' => $valor];
                }
                $plan->date = json_encode($date);
                break;
            case 'auditoria':  // EN REVISIÓN
                break;
            case 'aprendiendo':
                break;
            case 'monitoreo':
                break;
            case 'jornada':
                break;
        }

        $plan->save();

        return redirect()->route('indicadorplan.index');
    }

    public function edit($id) {
        $indicadorplan =  Indicadorplan::find($id);
        return view('indicadorplan.edit', compact('indicadorplan'));
    }

    public function update(Request $request, $id) {
        $indicadorplan =  Indicadorplan::find($id);
        $indicadorplan->update($request->all());
        return redirect()->route('indicadorplan.index');
    }

    public function destroy(Indicadorplan $indicator) {
        $indicator->delete();
        return redirect()->route('indicadorplan.index');
    }


    public function show($id) {

        $indicadorplan =  Indicadorplan::find($id);
        return view('indicadorplan.show', compact('indicadorplan'));
    }
}
