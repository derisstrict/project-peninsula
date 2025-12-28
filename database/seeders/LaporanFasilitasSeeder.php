<?php

namespace Database\Seeders;

use App\Models\LaporanFasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanFasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaporanFasilitas::create([
            'judul_laporan' => 'Kerusakan Pada Fasilitas Umum Toilet',
            'deskripsi_laporan' => 'Keran airnya rusak, sehingga tidak mengeluarkan air sama sekali, sehingga saya harus pindah tempat sambil menahan🙏',
            'foto_fasilitas' => ['placeholder.jpg', 'placeholder.jpg', 'placeholder.jpg'],
            'email_pelapor' => 'test@example.com',
            'nama_pelapor' => 'Deren Firdaus',
            'status_laporan' => '0', 
        ]);

        LaporanFasilitas::create([
            'judul_laporan' => 'Kerusakan Pada Fasilitas Umum Toilet',
            'deskripsi_laporan' => 'Ini bukan kerusakan fasilitas sih pak, tapi ini toiletnya kurang dibersihin udah kaya toilet di rumah kosong.',
            'foto_fasilitas' => ['placeholder.jpg', 'placeholder.jpg', 'placeholder.jpg'],
            'email_pelapor' => 'test@example.com',
            'nama_pelapor' => 'Derek Muller',
            'status_laporan' => '1', 
        ]);

        LaporanFasilitas::create([
            'judul_laporan' => 'Kerusakan Pada Fasilitas Tempat Sampah',
            'deskripsi_laporan' => 'Tempat sampah di salah satu lokasi yang sudah saya lampirkan pada gambar patah, tadi saya lihat kesenggol truk.',
            'foto_fasilitas' => ['placeholder.jpg', 'placeholder.jpg', 'placeholder.jpg'],
            'email_pelapor' => 'test@example.com',
            'nama_pelapor' => 'Martin Luther King Jr.',
            'status_laporan' => '2', 
        ]);
    }
}
