<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    use HasFactory;
    protected $table = 'comite';

    protected $fillable = [

      'ejecutadas',
      'observacion',
      'date'
    ];
    public function comite(){
        return $this->hasMany(indicator::class);
    }

}
