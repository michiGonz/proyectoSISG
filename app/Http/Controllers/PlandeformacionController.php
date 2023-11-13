<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndicadorplanController;
use App\Models\Plandeformacion;
use PhpParser\Node\Expr\Cast\Object_;

class PlandeformacionController extends Controller {
    public function index() {
        $plandeformacion = [];
        foreach (Plandeformacion::get() as $key => $plan) {
            $dates=[];
            foreach (json_decode($plan->date) as $key => $date) {
                $dates[$key]=$date;
            }
            $plan->date = $dates;
            $plandeformacion[]=$plan;
        }
        $indicadorplan = IndicadorplanController::verPlan('plan', date('Y'));
        return view('plandeformacion.index', compact('plandeformacion', 'indicadorplan'));
    }

    public function create() {
        $plandeformacion = Plandeformacion::all();
        return view('plandeformacion.create', compact('plandeformacion'));
    }

    public function store(Request $request) {

        $plan = new Plandeformacion($request->all());
        $date = [];
        if ($request->date_ambiente) {
            foreach ($request->date_ambiente as $clave => $valor) {
                $date['ambiente'][$clave] = ['name' => $request->name_ambiente[$clave], 'date' => $valor];
            }
        }
        if ($request->date_seguridad) {
            foreach ($request->date_seguridad as $clave => $valor) {
                $date['seguridad'][$clave] = ['name' => $request->name_seguridad[$clave], 'date' => $valor];
            }
        }
        if ($request->date_salud) {
            foreach ($request->date_salud as $clave => $valor) {
                $date['salud'][$clave] = ['name' => $request->name_salud[$clave], 'date' => $valor];
            }
        }

        $plan->date = json_encode($date);
        $plan->save();

        return redirect()->route('plandeformacion.index');
    }

    public function edit($id) {
        $plandeformacion =  Plandeformacion::find($id);
        return view('plandeformacion.edit', compact('plandeformacion'));
    }

    public function update(Request $request, $id) {
        $plandeformacion =  Plandeformacion::find($id);
        $plandeformacion->update($request->all());
        return redirect()->route('plandeformacion.index');
    }

    public function destroy(Plandeformacion $indicator) {
        $indicator->delete();
        return redirect()->route('plandeformacion.index');
    }

    public function show($id) {

        $plandeformacion =  Plandeformacion::find($id);
        return view('plandeformacion.show', compact('plandeformacion'));
    }
}
