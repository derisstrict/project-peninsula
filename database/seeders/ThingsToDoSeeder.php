<?php

namespace Database\Seeders;

use App\Models\ThingsToDo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ThingsToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_1',
            'ikon' => 'running.png'
        ]);

        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_2',
            'ikon' => 'sun.png'
        ]);
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_3',
            'ikon' => 'cycling.png'
        ]);
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_4',
            'ikon' => 'picnic.png'
        ]);
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_5',
            'ikon' => 'meditation.png'
        ]);
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_6',
            'ikon' => 'park.png'
        ]);

    }
}
