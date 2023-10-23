<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opsa extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'opsa';

    protected $fillable = [
    
        'RP_main',
        'EPP_main',
        'PP_main',
        'HE_main',
        'PROCE_main',
        'OL_main',
        'A_main',
        'RP_1',
        'RP_2',
        'RP_3',
        'RP_4',
        'RP_5',
        'RP_6',
        'EPP_1',
        'EPP_2',
        'EPP_3',
        'EPP_4',
        'EPP_5',
        'EPP_6',
        'EPP_7',
        'PP_1',
        'PP_2',
        'PP_3',
        'PP_4',
        'PP_5',
        'PP_6',
        'PP_7',
        'PP_8',
        'HE_1',
        'HE_2',
        'HE_3',
        'OL_1',
        'OL_2',
        'OL_3',
        'PROCE_1',
        'PROCE_2',
        'PROCE_3',
        'A_1',
        'A_2',
        'A_3',
        'A_4',
        'A_5',
        'A_6',
        'A_7',
        'A_8',
        'A_9',
        'A_10',
        'cantidad_seguro',
        'cantidad_inseguro',
        'total',
        'observacion',
       'date',
       
    ];
    
}
