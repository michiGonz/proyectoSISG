<?php
namespace App\Http\Controllers;

use App\Models\Indicator;
use App\Models\Activity;
use Illuminate\Http\Request;

class IndicatorController extends Controller
{
    public function index()
    {
        $indicators = Indicator::all();
        return view('indicators.index', compact('indicators'));
    }

    public function create()
    {
        $actividades = Activity::all();
        return view('indicators.create', compact('actividades'));
    }

    public function store(Request $request)
    {
        Indicator::create($request->all());
        return redirect()->route('index');
    }

    public function edit(Indicator $indicator)
    {
        $actividades = Activity::all();
        return view('indicators.edit', compact('indicator', 'actividades'));
    }

    public function update(Request $request, Indicator $indicator)
    {
        $indicator->update($request->all());
        return redirect()->route('indicators.index');
    }

    public function destroy(Indicator $indicator)
    {
        $indicator->delete();
        return redirect()->route('indicators.index');
    }
}