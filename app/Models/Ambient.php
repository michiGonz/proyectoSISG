<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambient extends Model
{
    use HasFactory;

    protected $table = 'ambiente';

    protected $fillable = [
    'name',
    'description',
    'cantpersona',
    'acompanantes',
    'date',
    ];

    public function indicator(){
        return $this->belongsTo(Indicator::class);
    }
}
