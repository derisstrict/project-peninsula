<?php

namespace Database\Seeders;

use App\Models\FotoVideo;
use App\Models\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
       Galeri::create([
        'id_user' => '1', 'url_media' => 'gallery/gallery1.jpg', 'alt_gambar' => 'Galeri 1'
       ]);

       Galeri::create([
        'id_user' => '1', 'url_media' => 'gallery/gallery2.jpg', 'alt_gambar' => 'Galeri 2'
       ]);

       Galeri::create([
        'id_user' => '1', 'url_media' => 'gallery/gallery3.jpg', 'alt_gambar' => 'Galeri 3'
       ]);

       Galeri::create([
        'id_user' => '1', 'url_media' => 'gallery/gallery4.jpg', 'alt_gambar' => 'Galeri 4'
       ]);

       Galeri::create([
        'id_user' => '1', 'url_media' => 'gallery/gallery5.jpg', 'alt_gambar' => 'Galeri 5'
       ]);
    }
}

