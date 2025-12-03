<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThingsToDo extends Model
{
    protected $table = 'things_to_dos';

    protected $guarded = [
        'user_id',
        'slug',
        'title',
        'deskripsi',
        'icon'
    ];

}
