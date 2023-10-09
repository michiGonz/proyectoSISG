<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;

class ConfiguracionController extends Controller
{
    public function index()
    {
  
    $configuracion = Configuracion::all();
    return view('configuracion.index', compact('configuracion'));
    }
}
