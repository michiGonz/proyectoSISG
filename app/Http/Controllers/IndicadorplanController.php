<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Indicadorplan;
use PhpParser\Node\Expr\Cast\Object_;

class IndicadorplanController extends Controller {

    public function index() {

        $indicadorplanes = Indicadorplan::get();
        $planes = [];
        foreach ($indicadorplanes as $indicadorplan) {
            switch ($indicadorplan['nombre_indicador']) {
                case 'opsa':
                    $indicadorplan['nombre'] = 'Opsa';
                    break;
                case 'simulacro':
                    $indicadorplan['nombre'] = 'Simulacro';
                    $indicadorplan['programadas_mes'] = '';
                    $indicadorplan['date'] = json_decode($indicadorplan['date']);
                    break;
                case 'comite':
                    $indicadorplan['nombre'] = 'Comité';
                    $indicadorplan['date'] = json_decode($indicadorplan['date']);
                    break;
                case 'plan':
                    $dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
                    $indicadorplan['nombre'] = 'Plan de formación de seguridad salud y ambiente';
                    $indicadorplan['date'] = json_decode($indicadorplan['date']);
                    $indicadorplan['date']->dia_ = $dias[$indicadorplan['date']->dia];
                    break;
                case 'parametros_ambientales':
                    $indicadorplan['nombre'] = 'Parámetros ambientales';
                    $dates = [];
                    foreach (json_decode($indicadorplan['date']) as $key => $date) {
                        foreach ($date as $valor) {
                            $dates[$key][] = ucfirst(strtolower(str_replace('_', ' ', trim($valor))));
                        }
                    }
                    $indicadorplan['date'] = (object)$dates;
                    break;
                case 'visita':
                    $indicadorplan['nombre'] = 'Visita geranial';
                    $indicadorplan['date'] = json_decode($indicadorplan['date']);
                    break;
                case 'auditoria':
                    $indicadorplan['nombre'] = 'Auditoria de trabajo';
                    break;
                case 'aprendiendo':
                    $indicadorplan['nombre'] = 'Aprendiendo en el trabajo';
                    break;
                case 'monitoreo':
                    $indicadorplan['nombre'] = 'Monitoreo ambiental';
                    $indicadorplan['date'] = json_decode($indicadorplan['date']);
                    $indicadorplan['programadas_mes'] = '';
                    $indicadorplan['programacion_anual'] = ($indicadorplan['date']->ruido + $indicadorplan['date']->emisiones + $indicadorplan['date']->agua);

                    break;
                case 'jornada':
                    $indicadorplan['nombre'] = 'Jornada ambiental';

                    break;
                default:
                    $indicadorplan['nombre'] = 'Indicador';
                    $indicadorplan['date'] = [];
                    break;
                case 'parametros_ambientales':
                    $indicadorplan['nombre'] = 'Parametros ambiental';
                    break;
            }
            $planes[] = $indicadorplan;
        }
        $indicadorplanes = $planes;
        //return response()->json(json_decode($indicadorplan[2]->date)[0]);
        return view('indicadorplan.index', compact('indicadorplanes'));
    }

    public function create() {
        $indicadorplan = [];
        $anio = date('Y');
        $consulta = array_column(DB::select("SELECT nombre_indicador FROM indicadorplan WHERE created_at LIKE '$anio%'"), 'nombre_indicador');
        return view('indicadorplan.create', compact('indicadorplan', 'consulta'));
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
                $dates = [];
                for ($i = 0; $i < 12; $i++) {
                    $dates[] = [
                        'dias' => $request->cntd_dias[$i],
                        'cntd' => $request->cntd_mes[$i]
                    ];
                }
                $plan->date = json_encode(['dia' => $request->dia_semana, 'meses' => $dates]);
                break;
            case 'parametros_ambientales':
                $dates = [];
                foreach ($request->PROD as $valor) {
                    $dates['PROD'][] = strtolower(str_replace(' ', '_', trim($valor)));
                }
                foreach ($request->MTTO as $valor) {
                    $dates['MTTO'][] = strtolower(str_replace(' ', '_', trim($valor)));
                }
                foreach ($request->SG as $valor) {
                    $dates['SG'][] = strtolower(str_replace(' ', '_', trim($valor)));
                }
                foreach ($request->CC as $valor) {
                    $dates['CC'][] = strtolower(str_replace(' ', '_', trim($valor)));
                }
                foreach ($request->SSII as $valor) {
                    $dates['SSII'][] = strtolower(str_replace(' ', '_', trim($valor)));
                }
                foreach ($request->SC as $valor) {
                    $dates['SC'][] = strtolower(str_replace(' ', '_', trim($valor)));
                }
                $plan->date = json_encode($dates);
                break;
            case 'visita':
                $date = [];
                foreach ($plan->date as $clave => $valor) {
                    $date[$clave] = ['name' => $request->name_date[$clave], 'date' => $valor];
                }
                $plan->date = json_encode($date);
                break;
            case 'auditoria':
                break;
            case 'aprendiendo':
                break;
            case 'monitoreo':
                $date = [];
                $plan->date = json_encode((object)[
                    'ruido' => $request->ruido,
                    'emisiones' => $request->emisiones,
                    'agua' => $request->agua,
                ]);
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



    static public function verPlan($indicador, $anio) {
        $plan = (object) DB::selectOne("SELECT * FROM indicadorplan WHERE nombre_indicador = '$indicador' AND created_at LIKE '$anio%'");
        if (property_exists($plan, 'nombre_indicador')) {
            switch ($plan->nombre_indicador) {
                case 'opsa':
                    $plan->nombre = 'Opsa';
                    break;
                case 'simulacro':
                    $plan->nombre = 'Simulacro';
                    $dates = [];
                    foreach (json_decode($plan->date) as $date) {
                        $status = DB::selectOne("SELECT COUNT(*) as contar FROM simulacion WHERE  id != '' AND date LIKE '{$date->date}%'")->contar;
                        $dates[] = (object)[
                            'name' => $date->name,
                            'date' => $date->date,
                            'status' => (($status >= 1) ? 'success' : (($date->date == date('Y-m')) ? 'warning' : ((date('Y-m') > $date->date) ? 'danger' : 'primary')))
                        ];
                    }
                    $plan->date = $dates;
                    break;
                case 'comite':
                    $plan->nombre = 'Comité';
                    $dates = [];
                    foreach (json_decode($plan->date) as $date) {
                        $status = DB::selectOne("SELECT COUNT(*) as contar FROM comite WHERE  id != '' AND date_reunion LIKE '{$date->reunion}%'")->contar;
                        $dates[] = (object)[
                            'reunion' => $date->reunion,
                            'entrega' => $date->entrega,
                            'status' => (($status >= 1) ? 'success' : (($date->reunion == date('Y-m')) ? 'warning' : ((date('Y-m') > $date->reunion) ? 'danger' : 'primary')))
                        ];
                    }
                    $plan->date = $dates;
                    break;
                case 'plan':
                    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                    $dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
                    $plan->nombre = 'Plan de formación de seguridad salud y ambiente';
                    $dates = [];
                    $plan->date = json_decode($plan->date);
                    $totalRealizadas = 0;
                    $totalPlanificadas = 0;
                    foreach ($plan->date->meses as $clave => $date) {
                        $mes = date('Y') . "-" . (($clave < 9) ? '0' . ($clave + 1) : $clave + 1);
                        $mesActual = date('Y-m');
                        $realizadas = number_format(DB::selectOne("SELECT SUM(LENGTH(date) - LENGTH(REPLACE(date, '$mes', ''))) / LENGTH('$mes') AS total FROM plandeformacion;")->total, 0);


                        $dates[] = (object)[
                            'mes' => $meses[$clave],
                            'dia' => $dias[$plan->date->dia],
                            'dias' => $date->dias,
                            'cntd' => $date->cntd,
                            'realizadas' => $realizadas,
                            'status' => (($mes <= $mesActual) ? (($mes == $mesActual) ? (($realizadas >= $date->cntd) ? 'success' : 'warning') : (($realizadas >= $date->cntd) ? 'success' : 'danger')) : (($realizadas >= $date->cntd) ? 'success' : 'primary'))
                        ];

                        $totalPlanificadas += $date->cntd;
                        $totalRealizadas += $realizadas;
                    }
                    $plan->date->meses = $dates;
                    $plan->date->planificadas = $totalPlanificadas;
                    $plan->date->realizadas = $totalRealizadas;
                    break;
                case 'parametros_ambientales':
                    $plan->nombre = 'Parámetros ambientales';
                    $dates = [];
                    foreach (json_decode($plan->date) as $key => $date) {
                        foreach ($date as $valor) {
                            $dates[$key][] = ucfirst(strtolower(str_replace('_', ' ', trim($valor))));
                        }
                    }
                    $plan->date = (object)$dates;
                    break;
                case 'visita':
                    $plan->nombre = 'Visita geranial';
                    $dates = [];
                    foreach (json_decode($plan->date) as $date) {
                        $status = DB::selectOne("SELECT COUNT(*) as contar FROM ambiente WHERE  id != '' AND date LIKE '{$date->date}%'")->contar;
                        $dates[] = (object)[
                            'name' => $date->name,
                            'date' => $date->date,
                            'status' => (($status >= 1) ? 'success' : (($date->date == date('Y-m')) ? 'warning' : ((date('Y-m') > $date->date) ? 'danger' : 'primary')))
                        ];
                    }
                    $plan->date = $dates;
                    break;
                case 'auditoria':
                    $plan->nombre = 'Auditoria de trabajo';
                    break;
                case 'aprendiendo':
                    $plan->nombre = 'Aprendiendo en el trabajo';
                    break;
                case 'monitoreo':
                    $plan->nombre = 'Monitoreo ambiental';
                    $plan->date = json_decode($plan->date);
                    $plan->programadas_mes = '';
                    // $plan->programacion_anual = ($plan->date->ruido + $plan->date->emisiones + $plan->date->agua);

                    break;
                case 'jornada':
                    $plan->nombre = 'jornada';
                    break;
                case 'parametros_ambientales':
                    $plan->nombre = 'Parametros ambiental';
                    $dates = [];
                    foreach (json_decode($plan->date) as $key => $date) {
                        foreach ($date as $valor) {
                            $dates[$key][] = ucfirst(strtolower(str_replace('_', ' ', trim($valor))));
                        }
                    }
                    $plan->date = (object)$dates;
                    break;
                default:
                    $plan->nombre = 'Indicador';
                    $plan->date = [];
                    break;
            }
        }
        return $plan;
    }
}
