<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    public $timestamps = true;
    protected $fillable = ['id_user', 'url_media', 'tanggal_upload', 'alt_gambar'];
}

