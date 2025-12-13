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
            'user_id' => 1,
            'title' => 'Jogging',
            'icon' => 'running.png'
        ]);

        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Sunbathing',
            'icon' => 'sun.png'
        ]);
        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Cycling',
            'icon' => 'cycling.png'
        ]);
        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Family Picnic',
            'icon' => 'picnic.png'
        ]);
        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Yoga',
            'icon' => 'meditation.png'
        ]);
        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Children Games',
            'icon' => 'park.png'
        ]);

    }
}
