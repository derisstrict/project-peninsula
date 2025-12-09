<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    public $timestamps = true;
    protected $fillable = ['id_user', 'judul_blog', 'slug', 'isi_blog', 'gambar_blog'];
}
