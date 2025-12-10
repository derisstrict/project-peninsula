<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3);
        $slug = Str::slug($title);
        return [
            'id_user' => '1',
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'deskripsi_event' => fake()->paragraph(50),
            'judul_event' => $title,
            'slug' => $slug,
            'gambar_event' => 'placeholder.jpg',
            'alt_gambar' => 'Image of Peninsula Island',
            'nama_penyelenggara' => fake()->company(),
            'harga_tiket' => fake()->numberBetween(10000, 300000)
        ];
    }
}
