<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;
    protected $table = 'jornada';

    protected $fillable = [
    'jornadas_ejecutadas',
      'descripcion',
      'ubicacion',
      'date'

    ];
    public function jornada(){
        return $this->hasMany(indicator::class);
    }

}
