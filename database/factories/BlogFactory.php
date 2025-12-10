<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $slug = Str::slug($title);
        return [
            //
            'id_user' => '1',
            'isi_blog' => fake()->paragraph(100),
            'judul_blog' => $title,
            'slug' => $slug,
            'gambar_blog' => 'placeholder.jpg',
            'alt_gambar' => 'The Image of Peninsula Island'
        ];
    }
}
