<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View_mkar_mcab_munit_mdept extends Model
{
    protected $table = 'view_mkar_mcab_munit_mdept';
    protected $primaryKey = 'nik';   // jika primary key-nya nik
    public $incrementing = false;    // jika nik bukan auto-increment
    protected $keyType = 'string';

}
