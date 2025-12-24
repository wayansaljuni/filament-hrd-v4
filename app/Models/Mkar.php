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

    public function mdept()
    {
        return $this->belongsTo(\App\Models\Mdept::class, 'kddep', 'kddep');
    }
    public function atasan()
    {
        /**
         * belongsTo(NamaModel, Foreign_Key_di_mkar, Owner_Key_Atasan_di_mkar)
         */
        return $this->belongsTo(MKar::class, 'nik_atasan', 'nik');
    }
}
