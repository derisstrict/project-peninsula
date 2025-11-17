<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    public $timestamps = false;
    protected $fillable = ['id_user', 'judul_blog', 'slug', 'tanggal_blog', 'isi_blog', 'gambar_blog'];
}
