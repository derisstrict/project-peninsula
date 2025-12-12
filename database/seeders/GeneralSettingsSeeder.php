<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralSetting::create(
            [
                'bahasa_tersedia' => ['English' => 'en', 'Bahasa Indonesia' => 'id'], 
                'is_gs' => true,
                'judul_utama' => ['The', 'Peninsula Island'],
                'warna_aksen_judul_utama' => '',
                'hero_image' => 'placeholder.jpg',
                'hero_image_alt' => 'Image of Peninsula Island'
            ]
        );
    }
}
