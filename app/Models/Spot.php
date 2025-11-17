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
        'xpos', 'ypos', 'title', 'url_media', 'catatan', 'keterangan'
    ];
}
