<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultura extends Model
{
    use HasFactory;
    
    protected $table = 'cultura';

    protected $fillable = [

        'comite_cumplido',
        'observacion',
        'date',
      
    ];
    public function cultura(){
        return $this->hasMany(indicator::class);
    }
}
