<?php

namespace Database\Seeders;

use App\Models\FotoVideo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FotoVideoSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('seeders/assets/gallery/*');

        foreach (glob($path) as $file) {
            $filename = basename($file);

            // copy ke storage/app/public/foto_video
            Storage::disk('public')->put(
                'foto_video/'.$filename,
                file_get_contents($file)
            );

            // tentukan tipe
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $type = in_array($ext, ['mp4','webm','ogg']) ? 'video' : 'foto';

            FotoVideo::create([
                'tipe_media' => $type,
                'url_media'  => 'foto_video/'.$filename,
            ]);
        }
    }
}
