<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhitelistUser extends Model
{
    protected $fillable = [
        'nama',
        'email',
    ];
}
