<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cursos;
use App\Models\Projetos;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //   Cursos::factory()->create([
        //     'nomecurso' => 'Análise e Desenvolvimento de Sistemas',
        //     'cor' => '#ffffff'
        // ]);

        Cursos::factory(10)->create();
        Projetos::factory(10)->create();

    }
}
