<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cultura;

class CulturaController extends Controller
{
    public function index()
    {
    $cultura = Cultura::all();
    //dd($cultura);
        return view('cultura.index', compact('cultura'));
    }

    public function create()
    {
        $cultura = Cultura::all();
        return view('cultura.create', compact('cultura'));
    }

    public function store(Request $request)
    {
        Cultura::create($request->all());
        return redirect()->route('cultura.index');
    }

    public function edit($id)
    {
        $cultura = Cultura::find($id);
        return view('cultura.edit', compact('cultura'));
    }

    public function update(Request $request, $id)
    {
        $cultura = Cultura::find($id);
        $cultura->update($request->all());
        return redirect()->route('cultura.index');
    }

    public function destroy(Cultura $cultura)
    {
        $cultura->delete();
        return redirect()->route('cultura.index');
    }


    public function show($id)
    {
        //dd($id);
        $cultura = Cultura::find($id);
        return view('cultura.show', compact('cultura'));
    }
}
