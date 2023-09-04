<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    use HasFactory;

    protected $table = 'ambiente';

    protected $fillable = [
        'name',
        'description',
        'cantidad',
        'acompanantes',
        'date',


    ];

    public function ambiente(){
        return $this->hasMany(indicator::class);
    }
}
