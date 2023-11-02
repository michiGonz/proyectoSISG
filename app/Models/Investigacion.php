<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    use HasFactory;
    protected $table = 'investigacion';
    protected $with = ['unidad_funcional'];

    protected $fillable = [
       'Total de registros:',
        'uf',
        'status',
        'nombre_incidente',
        'nombre_lugar',
        'observacion',
        'date',
    ];

    public function unidad_funcional(){
        return $this->hasMany(Unidadfuncional::class,'co_depart','uf');
    }
    

}
