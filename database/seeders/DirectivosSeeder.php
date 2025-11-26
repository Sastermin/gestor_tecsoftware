<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Directivo;

class DirectivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directivos = [
            ['nombre_materia' => 'Matemáticas', 'total_alumnos' => 30],
            ['nombre_materia' => 'Física', 'total_alumnos' => 25],
            ['nombre_materia' => 'Química', 'total_alumnos' => 28],
            ['nombre_materia' => 'Historia', 'total_alumnos' => 32],
        ];

        foreach ($directivos as $directivo) {
            Directivo::create($directivo);
        }
    }
}
