<?php use App\Http\Controllers\CursosController; ?>

@extends('layouts.paginas', ['text' => "$projeto->nomeprojeto"])


@section('estilos')
    <link href="{{ asset('css/Header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/Padrao.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/PaginaProjetos.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('conteudo')
    <div class="informacoes">
        <div class="descricao">
            <h2>Descrição</h2>
            <p>
                {{ $projeto->descricao }}
            </p>
        </div>

        <div class="projeto">
            <h2>Informações do Projeto</h2>

            <section>
                <h3>Desenvolvido por:</h3>
                <p>
                    {{ $projeto->nomealuno }}
                </p>
            </section>

            <section>
                <h3>Curso:</h3>
                <p>
                    {{ CursosController::mostrarCurso($projeto->fk_cursos_id)->nomecurso }}
                </p>
            </section>

            <div class="botaoprojeto">
                <h3>Clique no botão abaixo para abrir o site do projeto!</h3>
                <div>
                    <a target="_blank" href='{{ route('projeto.link', ['id' => $projeto->id]) }}'>
                        <div>PROJETO</div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
