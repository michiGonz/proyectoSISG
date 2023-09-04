<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    use HasFactory;

    protected $table = 'indicator';

    protected $fillable = [
        'name',
        'description',
        'activity_id'
    ];

    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}
