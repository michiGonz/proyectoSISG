<?php

namespace App\Http\Controllers;

use App\Models\Ambient;
use Illuminate\Http\Request;
use App\Http\Controllers\IndicadorplanController;
use App\Models\Usuariosprofit;

class AmbientController extends Controller
{
    public function index()
    {
  
    $ambiente = Ambient::all();
    $indicadorplan = IndicadorplanController::verPlan('visita',date('Y'));
    return view('ambiente.index', compact('ambiente','indicadorplan'));
    }

    public function create()
    {
        
        $ambient = Ambient::all();
        $usuarios = Usuariosprofit::get();
        return view('ambiente.create', compact('ambient', 'usuarios'));
    }

    public function store(Request $request)
    {
        $ambient = new Ambient($request->all());
        $ambient->personal=json_encode($request['personal']);
        $ambient->save();

        return redirect()->route('ambiente.index');
    }

    public function edit($id)
    {
        $ambient = Ambient::find($id);
        $usuarios = Usuariosprofit::get();
        return view('ambiente.edit', compact('ambient', 'usuarios'));
    }

    public function update(Request $request, $id)
    {
        $ambient = Ambient::find($id);
        $ambient->update($request->all());
        return redirect()->route('ambiente.index');
    }

    public function destroy(Ambient $indicator)
    {
        $indicator->delete();
        return redirect()->route('ambiente.index');
    }


    public function show($id)
    {
        //dd($id);
        $ambient = Ambient::find($id);
        return view('ambiente.show', compact('ambient'));
    }
}




