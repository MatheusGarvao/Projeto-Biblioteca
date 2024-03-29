<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Http\Controllers\CursosController;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projetos>
 */
class ProjetoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomeprojeto'=> fake()->name(),
            'descricao'=> fake()->text(),
            'nomealuno'=> fake()->name(),
            'fk_cursos_id' =>fake()->numberBetween(1,CursosController::quantidadeCursos()) ,
            'linkprojeto' => fake()->url(),
            'linkyoutube'=> fake()->url(),
        ];
    }
}
// $table->increments('id');
// $table->string('nomeprojeto');
// $table->text('descricao')->nullable(true);
// $table->integer('codigocurso');
// $table->integer('quantidadevisitadas')->nullable(false)->default(0);
// $table->text('linkprojeto');
// $table->timestamps();
// $table->boolean('projetoativo')->default(true);
