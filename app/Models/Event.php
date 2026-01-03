<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    public $timestamps = true;
    protected $fillable = ['id_user', 'judul_event', 'slug', 'tanggal_mulai', 'tanggal_selesai', 'deskripsi_event', 'nama_penyelenggara', 'harga_tiket', 'gambar_event', 'alt_gambar', 'tampilkan_event', 'event_pasti', 'waktu_event_pasti'];
}
