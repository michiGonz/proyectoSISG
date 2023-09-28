<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Jornada;

class JornadaController extends Controller
{
    public function index()
    {
        $jornada = Jornada::all();
        return view('jornada.index', compact('jornada'));
    }

    public function create()
    {
        $jornada = Jornada::all();
        return view('jornada.create', compact('jornada'));
    }

    public function store(Request $request)
    {
        Jornada::create($request->all());
        return redirect()->route('jornada.index');
    }

    public function edit($id)
    {
        $jornada = Jornada::find($id);
        return view('jornada.edit', compact('jornada'));
    }
    public function update(Request $request, $id)
    {

        $jornada = Jornada::find($id);
        $jornada->update($request->all());
        return redirect()->route('jornada.index');
    }

    public function destroy(Jornada $jornada)
    {
        $jornada->delete();
        return redirect()->route('jornada.index');
    }

    public function show($id)
    {
        $jornada = Jornada::find($id);
        return view('jornada.show', compact('jornada'));
    }
}
