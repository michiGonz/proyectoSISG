<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plandeformacion extends Model
{
    use HasFactory;
    protected $table = 'plandeformacion';

    protected $fillable = [
        'ejecutadas',
        'ejecutadas_ambiente',
        'date_ambiente',
        'ejecutadas_seguridad',
        'date_seguridad',
        'ejecutadas_salud',
        'date_salud',
       'observacion',


    ];
    
}
