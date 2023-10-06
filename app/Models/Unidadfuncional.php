<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidadfuncional extends Model
{
    use HasFactory;
    protected $table = 'unidadfuncional';

    protected $fillable = [

        'co_depart',
        'des_depart',

    ];
}
