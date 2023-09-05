<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulacroController extends Controller
{
    public function index()
    {
        $simulacro = Simulacro::all();
        return view('simulacro.index', compact('simulacro'));
    }

    public function create()
    {
        $simulacro = Simulacro::all();
        return view('simulacro.create', compact('simulacro'));
    }

    public function store(Request $request)
    {
        Simulacro::create($request->all());
        return redirect()->route('index');
    }

    public function edit(Simulacro $simulacro)
    {
        $simulacro = Simulacro::all();
        return view('simulacro.edit', compact('simulacro'));
    }

    public function update(Request $request, Simulacro $simulacro)
    {
        $simulacro->update($request->all());
        return redirect()->route('simulacro.index');
    }

    public function destroy(Simulacro $simulacro)
    {
        $simulacro->delete();
        return redirect()->route('simulacro.index');
    }
}
