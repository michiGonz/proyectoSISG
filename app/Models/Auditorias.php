<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditorias extends Model
{
    use HasFactory;
    protected $table = 'auditorias';

    protected $fillable = [
       

            'desvqqgas_1',
           'desvqqgas_2',
           'desvqqgas_3',
           'desvqqgas_4',
           'desvqqgas_5',
           'desvqqgas_6',
           'desvqqgas_7',
           'desvqqgas_8',
           'desvqqgas_9',
           'desvqqgas_10',
           'desvqqgas_11',
           'desvqqgas_12',
           'desvqqgas_13',
           'desvqqgas_14',
           'desvqqgas_15',
           'desvqqgas_16',

           'desvpdvsa_1',
           'desvpdvsa_2',
           'desvpdvsa_3',
           'desvpdvsa_4',
           'desvpdvsa_5',
           'desvpdvsa_6',
           'desvpdvsa_7',
           'desvpdvsa_8',
           'desvpdvsa_9',
           'desvpdvsa_10',
           'desvpdvsa_11',
           'desvpdvsa_12',
           'desvpdvsa_13',
           'desvpdvsa_14',
           'desvpdvsa_15',
           'desvpdvsa_16',

          'auditadas_pdvsa',
          'auditadas_qqgas',
          'desviacion_qqgas',
          'desviaciones_pdvsa',
          'noauditadas_qqgas',
          'noauditadas_pdvsa',
        'observacion',
        'date',

    ];
    public function auditorias(){
        return $this->hasMany(indicator::class);
    }
}
