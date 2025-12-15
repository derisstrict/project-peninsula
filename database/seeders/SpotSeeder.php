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
                'user_id' => 1,'xpos' => '115', 'ypos' => '-50', 'kunci_judul' => 'title_spot_1', 'kunci_teaser' => 'teaser_spot_1', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_1', 'kunci_keterangan' => 'description_spot_1', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );

        Spot::create(
            [
                'user_id' => 1,'xpos' => '68.5', 'ypos' => '-66', 'kunci_judul' => 'title_spot_2', 'kunci_teaser' => 'teaser_spot_2', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_2', 'kunci_keterangan' => 'description_spot_2', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                'user_id' => 1,'xpos' => '91.8', 'ypos' => '-53.2', 'kunci_judul' => 'title_spot_3', 'kunci_teaser' => 'teaser_spot_3', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_3', 'kunci_keterangan' => 'description_spot_3', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                 'user_id' => 1,'user_id' => 1,'xpos' => '107.5', 'ypos' => '-70', 'kunci_judul' => 'title_spot_4', 'kunci_teaser' => 'teaser_spot_4', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_4', 'kunci_keterangan' => 'description_spot_4', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                 'user_id' => 1,'xpos' => '122', 'ypos' => '-56', 'kunci_judul' => 'title_spot_5', 'kunci_teaser' => 'teaser_spot_5', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_5', 'kunci_keterangan' => 'description_spot_5', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                'user_id' => 1, 'xpos' => '91.9', 'ypos' => '-82.8', 'kunci_judul' => 'title_spot_6', 'kunci_teaser' => 'teaser_spot_6','url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_6', 'kunci_keterangan' => 'description_spot_6', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                'user_id' => 1,'xpos' => '114', 'ypos' => '-68', 'kunci_judul' => 'title_spot_7','kunci_teaser' => 'teaser_spot_7', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_7', 'kunci_keterangan' => 'description_spot_7', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                'user_id' => 1,'xpos' => '81.7', 'ypos' => '-57.2', 'kunci_judul' => 'title_spot_8', 'kunci_teaser' => 'teaser_spot_8','url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_8', 'kunci_keterangan' => 'description_spot_8', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
               'user_id' => 1,'xpos' => '108', 'ypos' => '-29', 'kunci_judul' => 'title_spot_9','kunci_teaser' => 'teaser_spot_9', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_9', 'kunci_keterangan' => 'description_spot_9', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
    }
}
