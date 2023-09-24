<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planificacionformacion extends Model
{
    use HasFactory;
    protected $table = 'planificacionformacion';

    protected $fillable = [
        'programadas_anual',
        'programadas_mensual',
        'programadas_seguridad',
        'programadas_salud',
        'programadas_ambiente',
        'date',
       'observacion',


    ];
    public function planificacionformacion(){
        return $this->hasMany(indicator::class);
    }
}
