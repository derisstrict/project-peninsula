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
        // 
        Spot::create(
            [
                'id_user' => 1,'xpos' => '113', 'ypos' => '-56', 'kunci_judul' => 'title_spot_1', 'kunci_teaser' => 'teaser_spot_1', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_1', 'kunci_keterangan' => 'description_spot_1', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );

        Spot::create(
            [
                'id_user' => 1,'xpos' => '70.5', 'ypos' => '-70.5', 'kunci_judul' => 'title_spot_2', 'kunci_teaser' => 'teaser_spot_2', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_2', 'kunci_keterangan' => 'description_spot_2', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                'id_user' => 1,'xpos' => '91.6', 'ypos' => '-58.6', 'kunci_judul' => 'title_spot_3', 'kunci_teaser' => 'teaser_spot_3', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_3', 'kunci_keterangan' => 'description_spot_3', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                 'id_user' => 1, 'xpos' => '107.7', 'ypos' => '-73.5', 'kunci_judul' => 'title_spot_4', 'kunci_teaser' => 'teaser_spot_4', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_4', 'kunci_keterangan' => 'description_spot_4', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                 'id_user' => 1,'xpos' => '119', 'ypos' => '-61', 'kunci_judul' => 'title_spot_5', 'kunci_teaser' => 'teaser_spot_5', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_5', 'kunci_keterangan' => 'description_spot_5', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                'id_user' => 1, 'xpos' => '91.8', 'ypos' => '-85', 'kunci_judul' => 'title_spot_6', 'kunci_teaser' => 'teaser_spot_6','url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_6', 'kunci_keterangan' => 'description_spot_6', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                'id_user' => 1,'xpos' => '113', 'ypos' => '-72', 'kunci_judul' => 'title_spot_7','kunci_teaser' => 'teaser_spot_7', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_7', 'kunci_keterangan' => 'description_spot_7', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
                'id_user' => 1,'xpos' => '84.1', 'ypos' => '-58.5', 'kunci_judul' => 'title_spot_8', 'kunci_teaser' => 'teaser_spot_8','url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_8', 'kunci_keterangan' => 'description_spot_8', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        Spot::create(
            [
               'id_user' => 1,'xpos' => '105.8', 'ypos' => '-37.5', 'kunci_judul' => 'title_spot_9','kunci_teaser' => 'teaser_spot_9', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_9', 'kunci_keterangan' => 'description_spot_9', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        // Toilet 1
        Spot::create(
            [
               'id_user' => 1,'xpos' => '80.8', 'ypos' => '-80', 'kunci_judul' => 'title_spot_10','kunci_teaser' => 'teaser_spot_10', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_10', 'kunci_keterangan' => 'description_spot_10', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        // Toilet 2
        Spot::create(
            [
               'id_user' => 1,'xpos' => '109', 'ypos' => '-66.2', 'kunci_judul' => 'title_spot_11','kunci_teaser' => 'teaser_spot_11', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_11', 'kunci_keterangan' => 'description_spot_11', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        // Vending Machine
        Spot::create(
            [
               'id_user' => 1,'xpos' => '83.5', 'ypos' => '-78.9', 'kunci_judul' => 'title_spot_12','kunci_teaser' => 'teaser_spot_12', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_12', 'kunci_keterangan' => 'description_spot_12', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        // Balebengong
        Spot::create(
            [
               'id_user' => 1,'xpos' => '95.2', 'ypos' => '-54', 'kunci_judul' => 'title_spot_13','kunci_teaser' => 'teaser_spot_13', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_13', 'kunci_keterangan' => 'description_spot_13', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
        //Gapura
        Spot::create(
            [
               'id_user' => 1,'xpos' => '91.8', 'ypos' => '-78.5', 'kunci_judul' => 'title_spot_14','kunci_teaser' => 'teaser_spot_14', 'url_media' => ["gallery1.jpg", "gallery2.jpg", "gallery3.jpg"], 'kunci_catatan' => 'note_spot_14', 'kunci_keterangan' => 'description_spot_14', 'alt_gambar' => 'The Image of Peninsula Island'
            ]
        );
    }
}
