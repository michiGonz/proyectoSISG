<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametros extends Model
{
    use HasFactory;
    protected $table = 'parametros';

    protected $fillable = [

        'PROD',
        'MTTO',
        'SSGG',
        'SC',
        'CC',
        'SSII',
        'date',
        'observacion',
       
    ];
}
