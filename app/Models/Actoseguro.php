<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actoseguro extends Model
{
    use HasFactory;

    protected $table = 'actos_seguro';

    protected $fillable = [
        'RP_main',
        'EPP_main',
        'PP_main',
        'HE_main',
        'PROCE_main',
        'A_main',
        'observacion',
        'date',
        'cantidad'

    ];

    public function actos_seguro(){
        return $this->hasMany(indicator::class);
    }
}
