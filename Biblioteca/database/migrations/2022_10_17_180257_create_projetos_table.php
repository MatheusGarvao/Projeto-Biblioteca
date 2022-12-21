<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('nomeprojeto');
            $table->text('descricao')->nullable();
            $table->string('nomealuno');
            $table->integer('quantidadevisitadas')->default(0);
            $table->text('linkprojeto');
            $table->integer('quantidadeclicklink')->default(0);
            $table->boolean('projetoativo')->default(true);
            $table->integer('fk_cursos_id')->index('FK_projetos_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
};
