<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametros;

class ParametrosController extends Controller
{
    public function index()
    {
    $parametros = Parametros::all();
    
        return view('parametros.index', compact('parametros'));
    }

    public function create()
    {
        $parametros = Parametros::all();
        return view('parametros.create', compact('parametros'));
    }

    public function store(Request $request)
    {
        Parametros::create($request->all());
        return redirect()->route('parametros.index');
    }

    public function edit($id)
    {
        $parametros = Parametros::find($id);
        return view('parametros.edit', compact('parametros'));
    }

    public function update(Request $request, $id)
    {
        $parametros = Parametros::find($id);
        $parametros->update($request->all());
        return redirect()->route('parametros.index');
    }

    public function destroy(Parametros $parametros)
    {
        $parametros->delete();
        return redirect()->route('parametros.index');
    }


    public function show($id)
    {
   
        $parametros = Parametros::find($id);
        return view('parametros.show', compact('parametros'));
    }
}
