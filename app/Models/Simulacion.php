<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulacion extends Model
{
    use HasFactory;
    protected $table = 'simulacion';

    protected $fillable = [
        'simulacro_cumplido',
        'name',
        'ubicacion',
        'observacion',
        'date',
    ];
    public function simulacion(){
        return $this->hasMany(indicator::class);
    }

}
