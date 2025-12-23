<?php

namespace App\Models;

use App\Models\Mdept;
use Illuminate\Database\Eloquent\Model;

class Pengajuanabsen extends Model
{
   protected $fillable = [
        'nik','kddep','nm_atasan','hak','lbr','tot','ambil',
        'sisa', 'lama','tawal','takhir','jawal','jakhir','alasan','alasan1',
        'alamat','telp','tgl','kota','tg','user','shift','jns','approve',
        'thn_ini','user_app','kdun','notapprove','jns1','tgapprove'

    ];

    protected $table = 'm_cuti_kary';

    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }
    public function jenisabsen()
    {
        return $this->belongsTo(Jenisabsen::class, 'jns', 'jns'); 
    }
    public function mdept()
    {
        return $this->belongsTo(Mdept::class, 'kddep', 'kddep'); 
    }
    public function mkar()
    {
        return $this->belongsTo(Mkar::class, 'nik', 'nik'); 
    }
}
