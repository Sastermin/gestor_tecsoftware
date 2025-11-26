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
            ['name' => 'Director General'],
            ['name' => 'Subdirector Académico'],
            ['name' => 'Coordinador de Área'],
            ['name' => 'Jefe de Estudios'],
        ];

        foreach ($directivos as $directivo) {
            Directivo::create($directivo);
        }
    }
}
