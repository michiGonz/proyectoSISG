<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiendo;


class AprendiendoController extends Controller
{
    public function index()
    {
    $aprendiendo = Aprendiendo::all();
    //dd($aprendiendo);
        return view('aprendiendo.index', compact('aprendiendo'));
    }

    public function create()
    {
        $aprendiendo = Aprendiendo::all();
        return view('aprendiendo.create', compact('aprendiendo'));
    }

    public function store(Request $request)
    {
        Aprendiendo::create($request->all());
        return redirect()->route('aprendiendo.index');
    }

    public function edit($id)
    {
        $aprendiendo = Aprendiendo::find($id);
        return view('aprendiendo.edit', compact('aprendiendo'));
    }

    public function update(Request $request, $id)
    {
        $aprendiendo = Aprendiendo::find($id);
        $aprendiendo->update($request->all());
        return redirect()->route('aprendiendo.index');
    }

    public function destroy(Aprendiendo $aprendiendo)
    {
        $aprendiendo->delete();
        return redirect()->route('aprendiendo.index');
    }


    public function show($id)
    {
        //dd($id);
        $aprendiendo = Aprendiendo::find($id);
        return view('aprendiendo.show', compact('aprendiendo'));
    }
}
