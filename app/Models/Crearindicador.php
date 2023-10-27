<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crearindicador extends Model
{
    use HasFactory;

    protected $table = 'crearindicador';

    protected $fillable = [

    'tipo_indicador',
   'name',
   'ubicacion',
   'observacion',
   'description',
   'nombre_incidente',
   'cantidad',
   'ejecutados',
   'cantidad_actividad',
    'date',
    ];
}
