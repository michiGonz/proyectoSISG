<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plandeformacion extends Model
{
    use HasFactory;
    protected $table = 'plandeformacion';

    protected $fillable = [
        'ejecutadas_ambiente',
        'date',
        'ejecutadas_seguridad',
        'ejecutadas_salud',
       'observacion',


    ];
    
}
