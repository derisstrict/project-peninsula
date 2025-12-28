<?php

namespace Database\Seeders;

use App\Models\FotoVideo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotoVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FotoVideo::truncate();
        FotoVideo::create(
            [
                'id_user' => 1,
                'tipe_media' => 'foto',
                'url_media' => ["gallery1.jpg"],
                'keterangan' => 'Foto panorama pantai Waterblow di sore hari.',
                
            ]
            );
        FotoVideo::create(
            [
                'id_user' => 1,
                'tipe_media' => 'video',
                'url_media' => ["video1.mp4"],
                'keterangan' => 'Video ombak besar di Pura Bias Tugel.',
            ]
            );
        FotoVideo::create(
            [
                'id_user' => 1,
                'tipe_media' => 'foto',
                'url_media' => ["gallery4.jpg"],
                'keterangan' => 'Patung Arjuna dan Kresna dari sisi utara.',
            ]
            );
    }
}
