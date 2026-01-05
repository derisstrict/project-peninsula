<?php

namespace Database\Seeders;

use App\Models\WhitelistUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhitelistUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WhitelistUser::create([
            'nama' => 'John Doe',
            'email' => 'johndoe@gmail.com',
        ]);
    }
}
