<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LandingPage::create(
            [
                'user_id' => '1', 'is_landingpage' => true, 'jam_operasional' => 'Every day | 06.00 AM - 10.00 PM', 'biaya_masuk' => '5000', 'gambar' => 'placeholder.jpg', 'alt' => 'image-peninsula-island'
            ]
        );
    }
}
