<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actoseguro extends Model
{
    use HasFactory;

    protected $table = 'actos_seguro';

    protected $fillable = [
        'reacciones_personas',
        'equipo_proteccion',
        'posicion_persona',
        'herramienta_equipo',
        'procedimiento_orden',
        'ambiente',
        'observacion',
        'date',
        'total'

    ];

    public function actos_seguro(){
        return $this->hasMany(indicator::class);
    }
}
