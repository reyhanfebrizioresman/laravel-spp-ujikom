<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = ['nisn','tanggal_bayar','bulan_bayar','tahun_bayar','jumlah_bayar','id_petugas'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
