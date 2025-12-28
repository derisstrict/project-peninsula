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
        // Pura
        Spot::create(
            [
                'id_user' => 1,'xpos' => '113', 'ypos' => '-56', 'kunci_judul' => 'title_spot_1', 'kunci_teaser' => 'teaser_spot_1', 'url_media' => ["/spots/pura1.jpg", "/spots/pura2.jpg", "/spots/pura3.jpg"], 'kunci_catatan' => 'note_spot_1', 'kunci_keterangan' => 'description_spot_1', 'alt_gambar' => 'Image for Pura Bias Tugel', 'tampilkan_modal' => '1'
            ]
        );
        // Helipad
        Spot::create(
            [
                'id_user' => 1,'xpos' => '70.5', 'ypos' => '-70.5', 'kunci_judul' => 'title_spot_2', 'kunci_teaser' => 'teaser_spot_2', 'url_media' => ["/spots/helipad1.jpg", "/spots/helipad2.jpg", "/spots/helipad3.jpg"], 'kunci_catatan' => 'note_spot_2', 'kunci_keterangan' => 'description_spot_2', 'alt_gambar' => 'Image for helipad', 'tampilkan_modal' => '1'
            ]
        );
        // Patung Arjuna
        Spot::create(
            [
                'id_user' => 1,'xpos' => '91.6', 'ypos' => '-58.6', 'kunci_judul' => 'title_spot_3', 'kunci_teaser' => 'teaser_spot_3', 'url_media' => ["/spots/arjuna1.jpg", "/spots/arjuna2.jpg", "/spots/arjuna3.jpg"], 'kunci_catatan' => 'note_spot_3', 'kunci_keterangan' => 'description_spot_3', 'alt_gambar' => 'Image for Arjuna Statue', 'tampilkan_modal' => '1'
            ]
        );
        // Kecak
        Spot::create(
            [
                 'id_user' => 1, 'xpos' => '107.7', 'ypos' => '-73.5', 'kunci_judul' => 'title_spot_4', 'kunci_teaser' => 'teaser_spot_4', 'url_media' => ["/spots/kecak1.jpg", "/spots/kecak2.jpg", "/spots/kecak3.jpg"], 'kunci_catatan' => 'note_spot_4', 'kunci_keterangan' => 'description_spot_4', 'alt_gambar' => 'Image for Kecak Area', 'tampilkan_modal' => '1'
            ]
        );
        // Pantai Suryodaya
        Spot::create(
            [
                 'id_user' => 1,'xpos' => '119', 'ypos' => '-61', 'kunci_judul' => 'title_spot_5', 'kunci_teaser' => 'teaser_spot_5', 'url_media' => ["/spots/pantai1.jpg", "/spots/pantai2.jpg", "/spots/pantai3.jpg"], 'kunci_catatan' => 'note_spot_5', 'kunci_keterangan' => 'description_spot_5', 'alt_gambar' => 'Image for Suryodaya Beach', 'tampilkan_modal' => '1'
            ]
        );
        // Nusagede
        Spot::create(
            [
                'id_user' => 1, 'xpos' => '91.8', 'ypos' => '-85', 'kunci_judul' => 'title_spot_6', 'kunci_teaser' => 'teaser_spot_6','url_media' => ["/spots/nusagede1.jpg", "/spots/nusagede2.jpg", "/spots/nusagede3.jpg"], 'kunci_catatan' => 'note_spot_6', 'kunci_keterangan' => 'description_spot_6', 'alt_gambar' => 'Image for Garden of Hope', 'tampilkan_modal' => '1'
            ]
        );
        // Garden
        Spot::create(
            [
                'id_user' => 1,'xpos' => '113', 'ypos' => '-72', 'kunci_judul' => 'title_spot_7','kunci_teaser' => 'teaser_spot_7', 'url_media' => ["/spots/garden1.jpg", "/spots/garden2.jpg", "/spots/garden3.jpg"], 'kunci_catatan' => 'note_spot_7', 'kunci_keterangan' => 'description_spot_7', 'alt_gambar' => 'Image for Garden of Flowers', 'tampilkan_modal' => '1'
            ]
        );
        // Patung Brothership
        Spot::create(
            [
                'id_user' => 1,'xpos' => '84.1', 'ypos' => '-58.5', 'kunci_judul' => 'title_spot_8', 'kunci_teaser' => 'teaser_spot_8','url_media' => ["/spots/patungbrother1.jpg", "/spots/patungbrother2.jpg", "/spots/patungbrother3.jpg"], 'kunci_catatan' => 'note_spot_8', 'kunci_keterangan' => 'description_spot_8', 'alt_gambar' => 'Image for Brothership Monument', 'tampilkan_modal' => '1'
            ]
        );
        //Waterblow
        Spot::create(
            [
               'id_user' => 1,'xpos' => '105.8', 'ypos' => '-37.5', 'kunci_judul' => 'title_spot_9','kunci_teaser' => 'teaser_spot_9', 'url_media' => ["/spots/waterblow1.jpg", "/spots/waterblow2.jpg", "/spots/wastafel3.jpg"], 'kunci_catatan' => 'note_spot_9', 'kunci_keterangan' => 'description_spot_9', 'alt_gambar' => 'Image for Waterblow', 'tampilkan_modal' => '1'
            ]
        );
        // Toilet 1
        Spot::create(
            [
               'id_user' => 1,'xpos' => '80.8', 'ypos' => '-80', 'kunci_judul' => 'title_spot_10','kunci_teaser' => 'teaser_spot_10', 'url_media' => ["/spots/toilet1.jpg", "/spots/toilet2.jpg", "/spots/toilet3.jpg"], 'kunci_catatan' => 'note_spot_10', 'kunci_keterangan' => 'description_spot_10', 'alt_gambar' => 'Image for toilet', 'tampilkan_modal' => '0'
            ]
        );
        // Toilet 2
        Spot::create(
            [
               'id_user' => 1,'xpos' => '109', 'ypos' => '-66.2', 'kunci_judul' => 'title_spot_11','kunci_teaser' => 'teaser_spot_11', 'url_media' => ["/spots/toilet4.jpg", "/spots/toilet5.jpg", "/spots/toilet6.jpg"], 'kunci_catatan' => 'note_spot_11', 'kunci_keterangan' => 'description_spot_11', 'alt_gambar' => 'Image for toilet', 'tampilkan_modal' => '0'
            ]
        );
        // Vending Machine
        Spot::create(
            [
               'id_user' => 1,'xpos' => '83.5', 'ypos' => '-78.9', 'kunci_judul' => 'title_spot_12','kunci_teaser' => 'teaser_spot_12', 'url_media' => ["/spots/vending1.jpg", "/spots/vending2.jpg", "/spots/vending3.jpg"], 'kunci_catatan' => 'note_spot_12', 'kunci_keterangan' => 'description_spot_12', 'alt_gambar' => 'Image for vending machine', 'tampilkan_modal' => '0'
            ]
        );
        // Balebengong
        Spot::create(
            [

               'id_user' => 1,'xpos' => '95.2', 'ypos' => '-53.5', 'kunci_judul' => 'title_spot_13','kunci_teaser' => 'teaser_spot_13', 'url_media' => ["/spots/balebengong1.jpg", "/spots/balebengong2.jpg", "/spots/balebengong3.jpg"], 'kunci_catatan' => 'note_spot_13', 'kunci_keterangan' => 'description_spot_13', 'alt_gambar' => 'Image for balebengong', 'tampilkan_modal' => '0'
            ]
        );
        //Gapura
        Spot::create(
            [
               'id_user' => 1,'xpos' => '91.8', 'ypos' => '-78.5', 'kunci_judul' => 'title_spot_14','kunci_teaser' => 'teaser_spot_14', 'url_media' => ["/spots/gapura1.jpg", "/spots/nusagede1.jpg", "/spots/nusagede2.jpg"], 'kunci_catatan' => 'note_spot_14', 'kunci_keterangan' => 'description_spot_14', 'alt_gambar' => 'Image for gapura', 'tampilkan_modal' => '0'
            ]
        );
        //Wastafel
        Spot::create(
            [
               'id_user' => 1,'xpos' => '91', 'ypos' => '-46.2', 'kunci_judul' => 'title_spot_15','kunci_teaser' => 'teaser_spot_15', 'url_media' => ["/spots/wastafel1.jpg", "/spots/wastafel2.jpg", "/spots/wastafel3.jpg"], 'kunci_catatan' => 'note_spot_15', 'kunci_keterangan' => 'description_spot_15', 'alt_gambar' => 'Image for sink', 'tampilkan_modal' => '0'
            ]
        );
    }
}
