<?php

namespace App\Http\Controllers;

use App\Models\Opsa;
use App\Models\Indicadorplan;
use Illuminate\Http\Request;

class OpsaController extends Controller
{
    
    public function index()
    {
        $opsa = Opsa::all();
        $indicadorplan = Indicadorplan::all();
        return view('opsa.index', compact('opsa', 'indicadorplan'));
    }

    public function create()
    {
        $opsa = Opsa::all();
        return view('opsa.create', compact('opsa'));
    }

    public function store(Request $request)
    {
        Opsa::create($request->all());
        return redirect()->route('opsa.index');
    }
    public function edit($id)
    {
        $opsa = Opsa::find($id);
        return view('opsa.edit', compact('opsa'));
    }
    public function update(Request $request, $id)
    {
       
        $opsa = Opsa::find($id);
        $opsa->update($request->all());
        return redirect()->route('opsa.index');
    }

    public function destroy(Opsa $opsa)
    {
        $opsa->delete();
        return redirect()->route('opsa.index');
    }
    public function show($id)
    {
        $opsa = Opsa::find($id);
        return view('opsa.show', compact('opsa'));
    }
}
