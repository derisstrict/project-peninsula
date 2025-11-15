<?php

namespace Database\Seeders;

use App\Models\Spot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spot::getQuery()->delete();
        Spot::create(
            [
                'title' => 'Pura Bias Tugel', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
            );
    }
}

