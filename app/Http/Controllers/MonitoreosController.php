<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndicadorplanController;
use App\Models\Indicadorplan;
use \App\Models\Monitoreos;

class MonitoreosController extends Controller {

    public function index() {

        $monitoreos = Monitoreos::all();
        $indicadorplan = IndicadorplanController::verPlan('monitoreos', date('Y'));
        return view('monitoreos.index', compact('monitoreos' , 'indicadorplan'));
    }

    public function create() {
        $monitoreos = Monitoreos::all();
        return view('monitoreos.create', compact('monitoreos'));
    }

    public function store(Request $request) {
        Monitoreos::create($request->all());
        return redirect()->route('monitoreos.index');
    }

    public function edit($id) {
        $monitoreos = Monitoreos::find($id);
        return view('monitoreos.edit', compact('monitoreos'));
    }

    public function update(Request $request, $id) {
        $monitoreos = Monitoreos::find($id);
        $monitoreos->update($request->all());
        return redirect()->route('monitoreos.index');
    }

    public function destroy(Monitoreos $monitoreos) {
        $monitoreos->delete();
        return redirect()->route('monitoreos.index');
    }


    public function show($id) {

        $monitoreos = Monitoreos::find($id);
        return view('monitoreos.show', compact('monitoreos'));
    }
}
