<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mkar extends Model
{
    protected $table = 'mkar';
    protected $primaryKey = 'nik';   // jika primary key-nya nik
    public $incrementing = false;    // jika nik bukan auto-increment
    protected $keyType = 'string';

    public function mcab()
    {
        return $this->belongsTo(\App\Models\Mcab::class, 'kdcab', 'kdcab');
    }

}
