<?php

namespace App\Http\Controllers;
use \App\Models\Operativa;

use Illuminate\Http\Request;

class OperativaController extends Controller
{
    public function index()
    {
    $operativa = Operativa::all();
    
        return view('operativa.index', compact('operativa'));
    }

    public function create()
    {
        $operativa = Operativa::all();
        return view('operativa.create', compact('operativa'));
    }

    public function store(Request $request)
    {
        Operativa::create($request->all());
        return redirect()->route('operativa.index');
    }

    public function edit($id)
    {
        $operativa = Operativa::find($id);
        return view('operativa.edit', compact('operativa'));
    }

    public function update(Request $request, $id)
    {
        $operativa = Operativa::find($id);
        $operativa->update($request->all());
        return redirect()->route('operativa.index');
    }

    public function destroy(Operativa $operativa)
    {
        $operativa->delete();
        return redirect()->route('operativa.index');
    }


    public function show($id)
    {
   
        $operativa = Operativa::find($id);
        return view('operativa.show', compact('operativa'));
    }
}

