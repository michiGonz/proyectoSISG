<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditorias extends Model
{
    use HasFactory;
    protected $table = 'auditorias';

    protected $fillable = [
        'permisos_generados',
        'auditadas_pdvsa',
        'auditadas_qqgas',
        'desviacion_qqgas',
        'desviaciones_pdvsa',
        'sindesviacion_qqgas',
        'sindesviacionpdvsa',
        'noauditadas_qqgas',
        'noauditadas_pdvsa',
        'observacion',
        'date',

    ];
    public function auditorias(){
        return $this->hasMany(indicator::class);
    }
}
