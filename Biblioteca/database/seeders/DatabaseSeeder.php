<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Projeto;


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

        Curso::factory(10)->create();
        Projeto::factory(10)->create();

    }
}
