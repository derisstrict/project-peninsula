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
            'title' => 'jogging',
            'deskripsi' => 'Improve your heart health and endurance with morning jogging. 
                            Daily jogging routine not only helps burn calories and maintain a healthy weight, 
                            but its also a highly effective way to start the day with high energy, 
                            clear your mind, and improve mental focus.',
            'icon' => 'running.png'
        ]);

        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Sunbathing',
            'deskripsi' => 'Take advantage of morning sunlight to stimulate 
                            the production of Vitamin D, an essential nutrient 
                            that supports immune function and maintains bone 
                            density. A brief exposure to gentle sunlight has 
                            also been shown to improve your overall mood and 
                            reduce the risk of depression.',
            'icon' => 'sun.png'
        ]);
        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Cycling',
            'deskripsi' => 'Experience the freedom of pedaling through 
                            green paths and surrounding neighborhoods. Cycling is an 
                            excellent low-impact exercise for building leg 
                            strength, increasing lung capacity, and is a 
                            fun way to explore new areas.',
            'icon' => 'cycling.png'
        ]);
        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Family Picnic',
            'deskripsi' => 'Put your gadgets aside and spend unforgettable 
                            time with your loved ones. Prepare your 
                            favorite food and enjoy a delicious meal in the 
                            park or by the lake, making it the perfect 
                            opportunity to bond with your family while 
                            breathing in the fresh air.',
            'icon' => 'picnic.png'
        ]);
        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'yoga',
            'deskripsi' => 'Focus your attention on harmonizing your 
                            breathing with gentle but purposeful body 
                            movements. Regular yoga practice is ideal for 
                            increasing joint and muscle flexibility, 
                            relieving physical tension caused by stress, 
                            and achieving a state of deep mental calm.',
            'icon' => 'meditation.png'
        ]);
        ThingsToDo::create([
            'user_id' => 1,
            'title' => 'Children Games',
            'deskripsi' => 'Unleash your childs energy with a fun, 
                            running adventure on Peninsula Islands vast, 
                            safe green expanse. Here, surrounded by stunning
                            ocean views, every game becomes a beautiful memory.',
            'icon' => 'park.png'
        ]);

    }
}
