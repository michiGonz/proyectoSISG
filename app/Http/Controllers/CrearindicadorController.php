<?php

namespace App\Http\Controllers;

use App\Models\Crearindicador;
use Illuminate\Http\Request;


class CrearindicadorController extends Controller
{
    public function index()
    {
        $crearindicador = Crearindicador::all();
        return view('crearindicador.index', compact('crearindicador'));
    }

}
