<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditorias extends Model
{
    use HasFactory;
    protected $table = 'auditorias';

    protected $fillable = [

        'auditorias_generadas',
        'auditadas',
        'auditadas_desviaciones',
        'auditadas_sindesviaciones',
        'no_auditados',
        'observacion',
        'date',

    ];
    public function auditorias(){
        return $this->hasMany(indicator::class);
    }
}
