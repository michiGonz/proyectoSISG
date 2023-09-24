<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planificacionformacion;

class PlanificacionformacionController extends Controller
{
    public function index()
    {
    $planificacionformacion = Planificacionformacion::all();

        return view('planificacionformacion.index', compact('planificacionformacion'));
    }

    public function create()
    {
        $planificacionformacion = Planificacionformacion ::all();
        return view('planificacionformacion.create', compact('planificacionformacion'));
    }

    public function store(Request $request)
    {
        Planificacionformacion::create($request->all());
        return redirect()->route('planificacionformacion.index');
    }

    public function edit($id)
    {
        $planificacionformacion =  Planificacionformacion::find($id);
        return view('planificacionformacion.edit', compact('planificacionformacion'));
    }

    public function update(Request $request, $id)
    {
        $planificacionformacion =  Planificacionformacion::find($id);
        $planificacionformacion->update($request->all());
        return redirect()->route('planificacionformacion.index');
    }

    public function destroy( Planificacionformacion $indicator)
    {
        $indicator->delete();
        return redirect()->route('planificacionformacion.index');
    }


    public function show($id)
    {

        $planificacionformacion =  Planificacionformacion::find($id);
        return view('planificacionformacion.show', compact('planificacionformacion'));
    }
}

