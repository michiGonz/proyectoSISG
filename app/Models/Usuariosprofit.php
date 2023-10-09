<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuariosprofit extends Model {
    use HasFactory;
    protected $table = 'usuariosprofit';

    protected $fillable = [
        'cod_emp',
        'nombres',
        'apellidos',
        'co_cargo',
        'co_depart',
        'co_ubicacion',
        'status',
    ];
    
}
