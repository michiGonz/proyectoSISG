<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Actoinseguro;


class ActoinseguroController extends Controller
{
    public function index()
    {
        $actoinseguro = Actoinseguro::all();
        return view('actoinseguro.index', compact('actoinseguro'));
    }

    public function create()
    {
        $actoinseguro = Actoinseguro::all();
        return view('actoinseguro.create', compact('actoinseguro'));
    }

    public function store(Request $request)
    {
        Actoinseguro::create($request->all());
        return redirect()->route('actoinseguro.index');
    }

    public function edit(Actoinseguro $actoinseguro)
    {
        $actoinseguro = Actoinseguro::all();
        return view('actoinseguro.edit', compact('actoinseguro'));
    }

    public function update(Request $request, Actoinseguro $actoinseguro)
    {
        $actoinseguro->update($request->all());
        return redirect()->route('actoinseguro.index');
    }

    public function destroy(Actoinseguro $actoinseguro)
    {
        $actoinseguro->delete();
        return redirect()->route('actoinseguro.index');
    }
    public function show($id)
    {
        //dd($id);
        $actoinseguro = Actoinseguro::find($id);
        return view('actoinseguro.show', compact('actoinseguro'));
    }
    public function mostrarSumatoria()
{
    $total = Registro::all(); // Cambia esto según tu lógica de consulta

    $sumatoria = $total->sum(function ($total) {
        return sum('actoinseguro.index');
    });

    return view('actoinseguro.create', compact('registros', 'sumatoria'));
}
}

