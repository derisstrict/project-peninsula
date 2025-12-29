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
        $this->command->warn('No user found, skipping FotoVideoSeeder');
        return;
    }

    $files = Storage::disk('public')->files('foto_video');

    if (empty($files)) {
        $this->command->warn('No files found in storage/app/public/foto_video');
        return;
    }

    foreach ($files as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $type = in_array($ext, ['mp4','webm','ogg']) ? 'video' : 'foto';

        FotoVideo::firstOrCreate([
            'url_media' => $file,
        ], [
            'id_user'    => $admin->id,
            'tipe_media' => $type,
        ]);
    }
}

}