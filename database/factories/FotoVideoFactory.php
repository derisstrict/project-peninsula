<?php

namespace Database\Factories;

use App\Models\FotoVideo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FotoVideo>
 */
class FotoVideoFactory extends Factory
{
        protected $model = FotoVideo::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => \App\Models\Admin::inRandomOrder()->value('id') ?? 1,
            'tipe_media' => $this->faker->randomElement(['foto', 'video']),
            'url_media' => $this->faker->imageUrl(),
            'keterangan' => $this->faker->paragraph(),

        ];

        
    }
}
