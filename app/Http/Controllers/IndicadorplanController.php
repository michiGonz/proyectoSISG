<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicadorplan;

class IndicadorplanController extends Controller
{
    public function index()
    {
    $indicadorplan = Indicadorplan::all();

        return view('indicadorplan.index', compact('indicadorplan'));
    }

    public function create()
    {
        $indicadorplan = Indicadorplan ::all();
        return view('indicadorplan.create', compact('indicadorplan'));
    }

    public function store(Request $request)
    {
        Indicadorplan::create($request->all());
        return redirect()->route('indicadorplan.index');
    }

    public function edit($id)
    {
        $indicadorplan =  Indicadorplan::find($id);
        return view('indicadorplan.edit', compact('indicadorplan'));
    }

    public function update(Request $request, $id)
    {
        $indicadorplan =  Indicadorplan::find($id);
        $indicadorplan->update($request->all());
        return redirect()->route('indicadorplan.index');
    }

    public function destroy( Indicadorplan $indicator)
    {
        $indicator->delete();
        return redirect()->route('indicadorplan.index');
    }


    public function show($id)
    {

        $indicadorplan =  Indicadorplan::find($id);
        return view('indicadorplan.show', compact('indicadorplan'));
    }
}
