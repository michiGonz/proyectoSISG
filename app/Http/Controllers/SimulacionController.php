<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Simulacion;
use \App\Models\Indicadorplan;

class SimulacionController extends Controller
{
    public function index()
    {
        $simulacion = Simulacion::all();
        $indicadorplan = Indicadorplan::all();
        return view('simulacion.index', compact('simulacion','indicadorplan'));
    }

    public function create()
    {
        return view('simulacion.create');
    }

    public function store(Request $request)
    {
        Simulacion::create($request->all());
        return redirect()->route('simulacion.index');
    }

    public function edit($id)
    {
        $simulacion = Simulacion::find($id);
        return view('simulacion.edit', compact('simulacion'));
    }
    public function update(Request $request, $id)
    {
      
        $simulacion = Simulacion::find($id);
        $simulacion->update($request->all());
        return redirect()->route('simulacion.index');
    }
  
    public function destroy(Simulacion $simulacion)
    {
        $simulacion->delete();
        return redirect()->route('simulacion.index');
    }

    public function show($id)
    {
        $simulacion = Simulacion::find($id);
        return view('simulacion.show', compact('simulacion'));
    }
}
