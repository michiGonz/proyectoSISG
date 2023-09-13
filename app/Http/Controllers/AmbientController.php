<?php

namespace App\Http\Controllers;

use App\Models\Ambient;
use Illuminate\Http\Request;

class AmbientController extends Controller
{
    public function index()
    {
    $ambients = Ambient::all();
    //dd($ambient);
        return view('ambiente.index', compact('ambients'));
    }

    public function create()
    {
        $ambient = Ambient::all();
        return view('ambiente.create', compact('ambient'));
    }

    public function store(Request $request)
    {
        Ambient::create($request->all());
        return redirect()->route('ambiente.index');
    }

    public function edit(Ambient $indicator)
    {
        $ambient = Ambient::all();
        return view('ambiente.edit', compact('indicator', 'ambient'));
    }

    public function update(Request $request, Ambient $indicator)
    {
        $indicator->update($request->all());
        return redirect()->route('ambiente.index');
    }

    public function destroy(Ambient $indicator)
    {
        $indicator->delete();
        return redirect()->route('ambiente.index');
    }


    public function show($id)
    {
        //dd($id);
        $ambient = Ambient::find($id);
        return view('ambiente.show', compact('ambient'));
    }
}




