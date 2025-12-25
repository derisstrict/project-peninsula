<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $table = 'spot';
    public $timestamps = false;
    protected $casts = [
        'url_media' => 'array',
    ];
    protected $fillable = [
    'id_user','xpos', 'ypos', 'kunci_judul','kunci_teaser', 'url_media', 'kunci_catatan', 'kunci_keterangan', 'alt_gambar'
    ];
}