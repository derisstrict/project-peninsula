<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use App\Models\User;
use App\Models\WhitelistUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BlogSeeder::class,
            EventSeeder::class,
            GaleriSeeder::class,
            SpotSeeder::class,
            LanguageLineSeeder::class,
            ThingsToDoSeeder::class,
            GeneralSettingsSeeder::class,
            LaporanFasilitasSeeder::class,
            WhitelistUserSeeder::class,
        ]);
    }
}
