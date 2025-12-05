<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $casts = [
        'available_languages' => 'array'
    ];
    protected $fillable = [
        'available_languages', 'is_gs'
    ];
}
