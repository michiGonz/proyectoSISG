<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicadorplan extends Model
{
    use HasFactory;

    protected $table = 'indicadorplan';

    protected $fillable = [

        'nombre_indicador',
        'meta',
        'programacion_anual',
        'programadas_mes',
        'date',
       'observacion',


    ];
    public function indicadorplan(){
        return $this->hasMany(indicator::class);
    }
}
