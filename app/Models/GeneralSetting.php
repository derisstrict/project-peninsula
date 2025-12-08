<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $casts = [
        'bahasa_tersedia' => 'array'
    ];
    protected $fillable = [
        'bahasa_tersedia', 'is_gs', 'judul_utama', 'warna_aksen_judul_utama'
    ];
}
