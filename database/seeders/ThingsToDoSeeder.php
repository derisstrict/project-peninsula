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
            'kunci_deskripsi' => 'box_description_1',
            'ikon' => 'running.png'
        ]);

        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_2',
            'kunci_deskripsi' => 'box_description_2',
            'ikon' => 'sun.png'
        ]);
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_3',
            'kunci_deskripsi' => 'box_description_3',
            'ikon' => 'cycling.png'
        ]);
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_4',
            'kunci_deskripsi' => 'box_description_4',
            'ikon' => 'picnic.png'
        ]);
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_5',
            'kunci_deskripsi' => 'box_description_5',
            'ikon' => 'meditation.png'
        ]);
        ThingsToDo::create([
            'id_user' => 1,
            'kunci_judul' => 'box_title_6',
            'kunci_deskripsi' => 'box_description_6',
            'ikon' => 'park.png'
        ]);

    }
}
