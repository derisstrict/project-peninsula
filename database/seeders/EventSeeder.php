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
            'gambar_event' => 'events/kecak_dance.jpg',
            'alt_gambar' => 'Image of kecak dance',
            'nama_penyelenggara' => 'The Peninsula Island',
            'harga_tiket' => '15000',
            'tampilkan_event' => '1',
            'event_pasti' => '1',
            'waktu_event_pasti' => 'Every Thursday | 06.00 AM - 07.00 AM'
        ]);

        Event::create([
            'id_user' => '1',
            'deskripsi_event' => 'By Indonesia Tourism Development Corporation
            The Nusa Dua Light Festival adalah festival lampion terbesar di Bali dan diselenggarakan oleh Indonesia Tourism Development Corporation. Biasanya berlangsung selama satu setengah bulan, memberikan waktu yang cukup bagi semua yang ingin berkunjung. Edisi pertama The Nusa Dua Light Festival diadakan pada Juli 2017. Festival ini disebut-sebut sebagai festival lampion terbesar di seluruh Bali. Edisi kedua festival tahunan ini berlangsung pada Juli 2018, dengan tema “Tari Api Air”. Edisi ketiga berhasil memukau para pengunjung pada tahun 2019, dengan tema “Hutan Rimba”. Ini adalah kesempatan sempurna bagi keluarga dan teman untuk menghabiskan waktu berkualitas bersama dan ikut serta dalam semua kegiatan yang menyenangkan.',
            'judul_event' => 'The Nusa Dua Light Festival',
            'slug' => 'the-nusa-dua-light-festival',
            'gambar_event' => 'events/event1.jpg',
            'alt_gambar' => 'Image of light festival',
            'nama_penyelenggara' => 'ITDC',
            'harga_tiket' => '150000',
            'tampilkan_event' => '1',
            'event_pasti' => '0',
            'tanggal_mulai' => '2025-11-25',
            'tanggal_selesai' => '2025-11-29',
        ]);
    }
}
