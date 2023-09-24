<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\opsa;

class OpsaController extends Controller
{
    public function index()
    {
        $opsa = opsa::all();
        return view('opsa.index', compact('opsa'));
    }

}
