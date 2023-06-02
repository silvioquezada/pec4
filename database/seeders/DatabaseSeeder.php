<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Noticia::factory(100)->create();

        \App\Models\Noticia::factory()->create([
            'titulo' => fake()->sentence(2),
            'contenido' => fake()->text(),
            'fecha_publicacion' => fake()->date('Y-m-d'),
            'imagen' => fake()->imageUrl(700, 700),
            'autor' => fake()->name()
        ]);
    }
}
