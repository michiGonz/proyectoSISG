<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manejo extends Model
{
    use HasFactory;
    
    protected $table = 'manejo';

    protected $fillable = [
        'name',
        'observacion',
        'date',
     

    ];
}
