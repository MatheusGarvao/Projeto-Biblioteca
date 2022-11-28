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
            $table->increments('id');
            $table->string('nomeprojeto');
            $table->text('descricao')->nullable(true);
            $table->text('nomealuno');
            $table->integer('codigocurso');
            $table->integer('quantidadevisitadas')->nullable(false)->default(0);
            $table->text('linkprojeto');
            $table->integer('quantidadeclicklink')->nullable(false)->default(0);
            $table->timestamps();
            $table->boolean('projetoativo')->default(true);
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
