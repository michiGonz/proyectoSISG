<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametros;

use App\Http\Controllers\IndicadorplanController;


class ParametrosController extends Controller {
    public function index() {
        $indicadorplan = IndicadorplanController::verPlan('parametros_ambientales',date('Y'));
        $parametros = [];
        foreach (Parametros::all() as $parametro) {
            $parametro->PROD = json_decode($parametro->PROD);
            $parametro->MTTO = json_decode($parametro->MTTO);
            $parametro->SSGG = json_decode($parametro->SSGG);
            $parametro->CC = json_decode($parametro->CC);
            $parametro->SSII = json_decode($parametro->SSII);
            $parametro->SC = json_decode($parametro->SC);
            $parametros[] = $parametro;
        }
        return view('parametros.index', compact('parametros', 'indicadorplan'));
    }

    public function create() {
        $indicadorplan = IndicadorplanController::verPlan('parametros_ambientales',date('Y'));
        $parametros = Parametros::get();
        return view('parametros.create', compact('parametros','indicadorplan'));
    }

    public function store(Request $request) {
        $parametros = new Parametros($request->all());
        $parametros->PROD = json_encode($parametros->PROD);
        $parametros->MTTO = json_encode($parametros->MTTO);
        $parametros->SSGG = json_encode($parametros->SSGG);
        $parametros->CC = json_encode($parametros->CC);
        $parametros->SSII = json_encode($parametros->SSII);
        $parametros->SC = json_encode($parametros->SC);
        $parametros->save();
        return redirect()->route('parametros.index');
    }

    public function edit($id) {
        $parametros = Parametros::find($id);
        return view('parametros.edit', compact('parametros'));
    }

    public function update(Request $request, $id) {
        $parametros = Parametros::find($id);
        $parametros->update($request->all());
        return redirect()->route('parametros.index');
    }

    public function destroy(Parametros $parametros) {
        $parametros->delete();
        return redirect()->route('parametros.index');
    }


    public function show($id) {

        $parametros = Parametros::find($id);
        return view('parametros.show', compact('parametros'));
    }
}
