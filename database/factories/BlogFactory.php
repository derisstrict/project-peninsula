<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
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
            //
            'id_user' => '1',
            'isi_blog' => fake()->paragraph(),
            'judul_blog' => $title,
            'slug' => $slug,
            'gambar_blog' => '/img/placeholder.jpg'
        ];
    }
}
