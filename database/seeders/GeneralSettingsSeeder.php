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
                'bahasa_tersedia' => ['English' => 'en', 'Bahasa Indonesia' => 'id', 'French' => 'fn'], 
                'is_gs' => true,
                'judul_utama' => '',
                'warna_aksen_judul_utama' => '',
            ]
        );
    }
}
