<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nisn','nis','nama','id_kelas','kompetensi_keahlian','alamat','no_telepon'];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

}
