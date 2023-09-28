<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Comite;

class ComiteController extends Controller
{
  
    public function index()
    {
        $comite = Comite::all();
        return view('comite.index', compact('comite'));
    }

    public function create()
    {
        $comite = Comite::all();
        return view('comite.create', compact('comite'));
    }

    public function store(Request $request)
    {
        Comite::create($request->all());
        return redirect()->route('comite.index');
    }

    public function edit($id)
    {
        $comite = Comite::find($id);
        return view('comite.edit', compact('comite'));
    }
    public function update(Request $request, $id)
    {

        $comite = Comite::find($id);
        $comite->update($request->all());
        return redirect()->route('comite.index');
    }

    public function destroy(Comite $comite)
    {
        $comite->delete();
        return redirect()->route('comite.index');
    }

    public function show($id)
    {
        $comite = Comite::find($id);
        return view('comite.show', compact('comite'));
    }
}
