<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actoinseguro extends Model
{
    use HasFactory;

    protected $table = 'actoinseguro';

    protected $fillable = [

        'AE',
        'CP',
        'RT',
        'DT',
        'PT',
        'CB',
        'C',
        'OC',
        'OI',
        'AR',
        'BM',
        'TR',
        'PP',
        'GO',
        'AGO',
        'QAT',
        'CDA',
        'CTE',
        'CCE',
        'IAI',
        'SE',
        'IT',
        'EFI',
        'CI',
        'PI',
        'PNC',
        'PNSC',
        'EOLI',
        'EOLC',
        'TIP',
        'AIP',
        'CVI',
        'PHD',
        'LEHPI',
        'ARA',
        'MDP',
        'ASUE',
        'AFAS',
        'MAND',
        'observacion',
        'date',
        'total',
    ];

    public function actoinseguro(){
        return $this->hasMany(indicator::class);
    }
}
