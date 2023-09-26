<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    use HasFactory;
    protected $table = 'investigacion';

    protected $fillable = [
    
       'acomulado',
        'uf',
        'nombre_incidente',
        'nombre_lugar',
        'observacion',
        'date',
    ];
    public function investigacion(){
        return $this->hasMany(indicator::class);
    }

}
