<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    use HasFactory;
    protected $table = 'comite';

    protected $fillable = [

   
      'observacion',
      'date_insasel',
      'date_reunion'

    ];
    public function comite(){
        return $this->hasMany(indicator::class);
    }

}
