<?php

namespace App\Http\Controllers;

use \App\Models\Operativa;

use Illuminate\Http\Request;

class OperativaController extends Controller {
    public function index() {
        $operativa = [];
        $tipo=[];
        foreach (Operativa::get() as $value) {
            $value->date = json_decode($value->date);
            $operativa[]=$value;
            $tipo[]=$value;
        } 
        return view('operativa.index', compact('operativa'));
    }

    public function create() {
        $operativa = Operativa::all();
        return view('operativa.create', compact('operativa'));
    }

    public function store(Request $request) {
        $operativa = new Operativa($request->all());
        $date = [];
        foreach ($operativa->date as $clave => $valor) {
            $date[$clave] = ['name' => $request->name[$clave], 'status' =>$request->status[$clave],'date' => $valor ];
        }
        $operativa->date = json_encode($date);
        $operativa->save();
        return redirect()->route('operativa.index');
    }

    public function edit($id) {
        $operativa = Operativa::find($id);
        return view('operativa.edit', compact('operativa'));
    }

    public function update(Request $request, $id) {
        $operativa = Operativa::find($id);
        $operativa->update($request->all());
        return redirect()->route('operativa.index');
    }

    public function destroy(Operativa $operativa) {
        $operativa->delete();
        return redirect()->route('operativa.index');
    }


    public function show($id) {

        $operativa = Operativa::find($id);
        return view('operativa.show', compact('operativa'));
    }
}
