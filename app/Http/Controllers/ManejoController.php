<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Manejo;

class ManejoController extends Controller
{
    public function index()
    {
    $manejo = Manejo::all();
    //dd($manejo);
        return view('manejo.index', compact('manejo'));
    }

    public function create()
    {
        $manejo = Manejo::all();
        return view('manejo.create', compact('manejo'));
    }

    public function store(Request $request)
    {
        Manejo::create($request->all());
        return redirect()->route('manejo.index');
    }

    public function edit($id)
    {
        $manejo = Manejo::find($id);
        return view('manejo.edit', compact('manejo'));
    }

    public function update(Request $request, $id)
    {
        $manejo = Manejo::find($id);
        $manejo->update($request->all());
        return redirect()->route('manejo.index');
    }

    public function destroy(Manejo $manejo)
    {
        $manejo->delete();
        return redirect()->route('manejo.index');
    }


    public function show($id)
    {
        //dd($id);
        $manejo = Manejo::find($id);
        return view('manejo.show', compact('manejo'));
    }
}
