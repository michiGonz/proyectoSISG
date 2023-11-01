<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndicadorplanController;
use App\Models\Auditorias;

class AuditoriasController extends Controller {

    public function index() {

        $auditorias = Auditorias::all();
        $indicadorplan = IndicadorplanController::verPlan('auditoria', date('Y'));
        return view('auditorias.index', compact('auditorias' , 'indicadorplan'));
    }

    public function create() {
        $auditorias = Auditorias::all();
        return view('auditorias.create', compact('auditorias'));
    }

    public function store(Request $request) {
        Auditorias::create($request->all());
        return redirect()->route('auditorias.index');
    }

    public function edit($id) {
        $auditorias =  Auditorias::find($id);
        return view('auditorias.edit', compact('auditorias'));
    }

    public function update(Request $request, $id) {
        $auditorias =  Auditorias::find($id);
        $auditorias->update($request->all());
        return redirect()->route('auditorias.index');
    }

    public function destroy(Auditorias $indicator) {
        $indicator->delete();
        return redirect()->route('auditorias.index');
    }


    public function show($id) {

        $auditorias =  Auditorias::find($id);
        return view('auditorias.show', compact('auditorias'));
    }
}
