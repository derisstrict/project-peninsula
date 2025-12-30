<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $casts = [
        'bahasa_tersedia' => 'array',
        'judul_utama' => 'array'
    ];
    protected $fillable = [
        'bahasa_tersedia', 'is_gs', 'judul_utama', 'warna_aksen_judul_utama', 'gambar_hero', 'gambar_hero_alt', 'video_home', 'video_home_thumbnail'
    ];
}
