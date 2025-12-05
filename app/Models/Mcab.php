<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mcab extends Model
{
    protected $table = 'mcab';
    protected $primaryKey = 'kdcab';   // jika primary key-nya kdcab
    public $incrementing = false;    // jika nik bukan auto-increment
    protected $keyType = 'string';    
}
