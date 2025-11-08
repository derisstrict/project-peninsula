<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
        return [
            'id_user' => '1',
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'deskripsi_event' => fake()->paragraph(),
            'judul_event' => $title,
            'slug' => $slug,
            'gambar_event' => '/img/placeholder.jpg',
            'status_event' => fake()->numberBetween(0, 1),
            'nama_penyelenggara' => fake()->company(),
            'harga_tiket' => fake()->randomFloat(3, 20, 150)
        ];
    }
}
