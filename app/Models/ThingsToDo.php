<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThingsToDo extends Model
{
    protected $table = 'things_to_dos';

    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'deskripsi',
        'icon'
    ];

}
