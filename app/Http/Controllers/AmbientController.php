<?php

namespace App\Http\Controllers;

use App\Models\Ambient;
use Illuminate\Http\Request;
use App\Models\Indicadorplan;



class AmbientController extends Controller
{
    public function index()
    {
  
    $ambiente = Ambient::all();
    $indicadorplan = Indicadorplan::all();
    return view('ambiente.index', compact('ambiente','indicadorplan'));
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

    public function edit($id)
    {
        $ambient = Ambient::find($id);
        return view('ambiente.edit', compact('ambient'));
    }

    public function update(Request $request, $id)
    {
        $ambient = Ambient::find($id);
        $ambient->update($request->all());
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




