<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'id_user' => '1',
            'deskripsi_event' => 'Kecak dance is a traditional Balinese performance that combines rhythmic chanting, dramatic storytelling from the Ramayana epic, and mesmerizing fire scenes, making it one of Bali\'s most iconic cultural spectacles. It is performed by a large group of men sitting in a circle, chanting “cak-cak-cak” in unison, while dancers enact mythological battles and heroic tales.',
            'judul_event' => 'Kecak Dance',
            'slug' => 'kecak-dance',
            'gambar_event' => 'placeholder.jpg',
            'alt_gambar' => 'Image of kecak dance',
            'nama_penyelenggara' => 'The Peninsula Island',
            'harga_tiket' => '15000',
            'tampilkan_event' => '1',
            'event_pasti' => '1',
            'waktu_event_pasti' => 'Every Thursday | 06.00 AM - 07.00 AM'
        ]);

        Event::factory()->count(50)->create();
    }
}
