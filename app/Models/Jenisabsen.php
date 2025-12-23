<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenisabsen extends Model
{
    protected $fillable = [
        'jns',
        'ket',
        'ket1',
        'aktif',
    ];

    protected $table = 'm_cuti_jns';

}
