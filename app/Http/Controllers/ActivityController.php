<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Indicator;

class ActivityController extends Controller
{   
    public function index()
    {
        $activity = Activity::all();
        $indicators = Indicator::all();
        return view('index', compact('activity', 'indicators'));
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        Activity::create($request->all());
        return redirect()->route('index');
    }
    
    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }
    
    public function update(Request $request, Activity $activity)
    {
        $activity->update($request->all());
        return redirect()->route('activities.index');
    }
    
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activities.index');
    }
    
}
