<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opsa extends Model
{
    use HasFactory;
    protected $table = 'opsa';

    protected $fillable = [
        'acto_seguro',
        'acto_inseguro',

    ];

    public function opsa(){
        return $this->belongsTo(Indicator::class);
    }
}
