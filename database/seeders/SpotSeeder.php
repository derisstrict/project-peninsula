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
        Spot::truncate();
        Spot::create(
            [
                'xpos' => '117.5', 'ypos' => '-35', 'title' => 'Pura Bias Tugel', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );

        Spot::create(
            [
                'xpos' => '57', 'ypos' => '-55', 'title' => 'Helipad', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'xpos' => '87', 'ypos' => '-39', 'title' => 'Patung Arjuna dan Kresna', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'xpos' => '107', 'ypos' => '-60', 'title' => 'Kecak and Barong Dance', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'xpos' => '126', 'ypos' => '-43', 'title' => 'Suryodaya Beach', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'xpos' => '87', 'ypos' => '-76.5', 'title' => 'Garden of Hope', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'xpos' => '115', 'ypos' => '-57.5', 'title' => 'Taman Bunga', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'xpos' => '74', 'ypos' => '-44', 'title' => 'Brothership Monument', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'xpos' => '107.5', 'ypos' => '-7.5', 'title' => 'Waterblow', 'url_media' => '["/img/gallery1.jpg", "img/gallery2.jpg", "img/gallery3.jpg"]', 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
    }
}

