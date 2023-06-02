<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->sentence(2),
            'contenido' => fake()->text(),
            'fecha_publicacion' => fake()->date('Y-m-d'),
            'imagen' => fake()->imageUrl(700, 700),
            'autor' => fake()->name()
        ];
    }
}
