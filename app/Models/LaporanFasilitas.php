<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanFasilitas extends Model
{
    protected $casts = [
        'foto_fasilitas' => 'array'
    ];
    protected $fillable = [
        'tanggal_laporan', 'status_laporan', 'nama_pelapor', 'email_pelapor', 'foto_fasilitas', 'deskripsi_laporan', 'judul_laporan', 'id_user'  
    ];
}
