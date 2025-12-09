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
                'user_id' => 1,'xpos' => '115', 'ypos' => '-50', 'title' => 'Pura Bias Tugel', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );

        Spot::create(
            [
                'user_id' => 1,'xpos' => '68.5', 'ypos' => '-66', 'title' => 'Helipad', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'user_id' => 1,'xpos' => '91.8', 'ypos' => '-53.2', 'title' => 'Patung Arjuna dan Kresna', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                 'user_id' => 1,'user_id' => 1,'xpos' => '107.5', 'ypos' => '-70', 'title' => 'Kecak and Barong Dance', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                 'user_id' => 1,'xpos' => '122', 'ypos' => '-56', 'title' => 'Suryodaya Beach', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'user_id' => 1, 'xpos' => '91.9', 'ypos' => '-82.8', 'title' => 'Garden of Hope', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'user_id' => 1,'xpos' => '114', 'ypos' => '-68', 'title' => 'Taman Bunga', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
                'user_id' => 1,'xpos' => '81.7', 'ypos' => '-57.2', 'title' => 'Brothership Monument', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
        Spot::create(
            [
               'user_id' => 1,'xpos' => '108', 'ypos' => '-29', 'title' => 'Waterblow', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'catatan' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash). ', 'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.',
            ]
        );
    }
}
