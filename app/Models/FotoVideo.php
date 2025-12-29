<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FotoVideo extends Model
{
    use HasFactory;
    protected $table = 'foto_video';
    public $timestamps = true;
    protected $fillable = ['id_user', 'tipe_media', 'url_media', 'keterangan', 'tanggal_upload'];
}

