<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Observation;

class ObsController extends Controller
{
    public function index()
    {
        $observation = Observation::all();
        return view('observacion.index', compact('observation'));
    }

    public function create()
    {
        $observation = Observation::all();
        return view('observacion.create', compact('observation'));
    }

    public function store(Request $request)
    {
        Observation::create($request->all());
        return redirect()->route('index');
    }

    public function edit(Observation $observation)
    {
        $observation = Observation::all();
        return view('observation.edit', compact('observation'));
    }

    public function update(Request $request, Observation $observation)
    {
        $observation->update($request->all());
        return redirect()->route('observacion.index');
    }

    public function destroy(Observation $observation)
    {
        $observation->delete();
        return redirect()->route('observacion.index');
    }
}
