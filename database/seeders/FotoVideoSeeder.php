<?php

namespace Database\Seeders;

use App\Models\FotoVideo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FotoVideoSeeder extends Seeder
{
    public function run(): void
    {
        // 1️⃣ Ambil admin
        $admin = User::first();
        if (!$admin) {
            throw new \Exception('No user found for foto_video seeder');
        }

        // 2️⃣ Folder sumber & target
        $sourcePath = public_path('img/galery');
        $storageDisk = Storage::disk('public');

        if (!File::exists($sourcePath)) {
            $this->command->warn('Folder public/img/galery tidak ditemukan.');
            return;
        }

        // 3️⃣ Copy file galeri ke storage
        foreach (File::files($sourcePath) as $file) {
            $storageDisk->putFileAs(
                'foto_video',
                $file,
                $file->getFilename()
            );
        }

        // 4️⃣ Seeder baca dari storage & insert DB
        $files = $storageDisk->files('foto_video');

        foreach ($files as $file) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $type = in_array($ext, ['mp4','webm','ogg']) ? 'video' : 'foto';

            FotoVideo::firstOrCreate(
                ['url_media' => $file],
                [
                    'id_user'    => $admin->id,
                    'tipe_media' => $type,
                ]
            );
        }
    }
}

