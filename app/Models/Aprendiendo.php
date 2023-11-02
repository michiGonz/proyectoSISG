<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiendo extends Model
{
    use HasFactory;
    protected $table = 'aprendiendo';

    protected $fillable = [
    'cantidad_actividad',
    'date',
    'observacion',
    ];

    public function aprendiendo(){
        return $this->belongsTo(Indicator::class);
    }
}
