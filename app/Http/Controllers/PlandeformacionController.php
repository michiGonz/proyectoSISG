<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndicadorplanController;
use App\Models\Plandeformacion;

class PlandeformacionController extends Controller {
    public function index() {

        $plandeformacion = Plandeformacion::all();
        $indicadorplan = IndicadorplanController::verPlan('plan', date('Y'));
        return view('plandeformacion.index', compact('plandeformacion', 'indicadorplan'));
    }

    public function create() {
        $plandeformacion = Plandeformacion::all();
        return view('plandeformacion.create', compact('plandeformacion'));
    }

    public function store(Request $request) {

        $plan = new Plandeformacion($request->all());
        $plan->date = json_encode(['ambiente' => $request->date_ambiente, 'seguridad' => $request->date_seguridad, 'salud' => $request->date_salud]);
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
