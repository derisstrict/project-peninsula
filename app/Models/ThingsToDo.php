<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThingsToDo extends Model
{
    protected $table = 'things_to_dos';

    protected $fillable = [
        'id_user',
        'ikon',
        'kunci_judul',
    ];

}
