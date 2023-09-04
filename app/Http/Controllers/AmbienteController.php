<?php
namespace App\Http\Controllers;

use App\Models\Ambiente;
use App\Models\Activity;
use Illuminate\Http\Request;

class AmbienteController extends Controller
{
    public function index()
    {
        $ambiente = Ambiente::all();
        return view('ambiente.index', compact('ambiente'));
    }

    public function create()
    {
        $actividades = Activity::all();
        return view('ambiente.create', compact('actividades'));
    }

    public function store(Request $request)
    {
        Ambiente::create($request->all());
        return redirect()->route('index');
    }

    public function edit(Ambiente $indicator)
    {
        $actividades = Activity::all();
        return view('ambiente.edit', compact('indicator', 'actividades'));
    }

    public function update(Request $request, Ambiente $indicator)
    {
        $indicator->update($request->all());
        return redirect()->route('ambiente.index');
    }

    public function destroy(Ambiente $indicator)
    {
        $indicator->delete();
        return redirect()->route('ambiente.index');
    }
}