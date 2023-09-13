<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actoseguro;

class ActoseguroController extends Controller
{
    public function index()
    {
        $actos_seguro = Actoseguro::all();
        return view('actoseguro.index', compact('actos_seguro'));
    }

    public function create()
    {
        $actos_seguro = Actoseguro::all();
        return view('actoseguro.create', compact('actos_seguro'));
    }

    public function store(Request $request)
    {
        Actoseguro::create($request->all());
        return redirect()->route('actoseguro.index');
    }

    public function edit(Actoseguro $actos_seguro)
    {
        $actos_seguro = Actoseguro::all();
        return view('actoseguro.edit', compact('actos_seguro'));
    }

    public function update(Request $request, Actoseguro $actoseguro)
    {
        $actos_seguro->update($request->all());
        return redirect()->route('actoseguro.index');
    }

    public function destroy(Ambiente $actos_seguro)
    {
        $actos_seguro->delete();
        return redirect()->route('actoseguro.index');
    }
    public function show($id)
    {
        $actos_seguro = Actoseguro::find($id);
        return view('actoseguro.show', compact('actos_seguro'));
    }
}
