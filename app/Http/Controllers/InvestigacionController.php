<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Investigacion;
use \App\Models\Unidadfuncional;

class InvestigacionController extends Controller
{
    public function index()
    {
        $investigacion = Investigacion::all();
        return view('investigacion.index', compact('investigacion'));
    }

    public function create()
    {
        $ufs = Unidadfuncional::get();
        return view('investigacion.create', compact('ufs'));
    }

    public function store(Request $request)
    {
        Investigacion::create($request->all());
        return redirect()->route('investigacion.index');
    }

    public function edit($id)
    {
        $investigacion = Investigacion::find($id);
        return view('investigacion.edit', compact('investigacion'));
    }
    public function update(Request $request, $id)
    {

        $investigacion = Investigacion::find($id);
        $investigacion->update($request->all());
        return redirect()->route('investigacion.index');
    }

    public function destroy(Investigacion $investigacion)
    {
        $investigacion->delete();
        return redirect()->route('investigacion.index');
    }

    public function show($id)
    {
        $investigacion = Investigacion::find($id);
        return view('investigacion.show', compact('investigacion'));
    }
}
