<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operativa extends Model {
    use HasFactory;
    protected $table = 'operativa';

    protected $fillable = [

        'acciones_pendientes',
        'acciones_ejecutadas',
        'observacion',
        'date',

    ];
}
