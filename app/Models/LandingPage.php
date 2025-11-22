<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $table = 'landing_page';
    protected $casts = [
        'url_media' => 'array',
    ];
    protected $fillable = [
        'jam_operasional', 'biaya_masuk', 'gambar', 'alt' 
    ];
}
