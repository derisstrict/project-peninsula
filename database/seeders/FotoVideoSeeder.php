<?php

namespace Database\Seeders;

use App\Models\FotoVideo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FotoVideoSeeder extends Seeder {


public function run(): void
{
    $admin = User::first();
    if (!$admin) {
        throw new \Exception('No user found for foto_video seeder');
    }

    $files = Storage::disk('public')->files('foto_video');

    foreach ($files as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $type = in_array($ext, ['mp4','webm','ogg']) ? 'video' : 'foto';

        FotoVideo::create([
            'id_user'    => $admin->id,
            'tipe_media' => $type,
            'url_media'  => $file,
        ]);
    }
}



}
