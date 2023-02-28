<?php use App\Http\Controllers\CursosController; ?>

@extends('layouts.paginas', ['text' => 'Biblioteca de Trabalhos'])

@section('estilos')
    <link href="{{ asset('css/Cards.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/MainPage.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('conteudo')
    <div id="informacoes">
        <div class="menu">
            <input type="checkbox" id="dropdown-checkbox" class="dropdown-checkbox">
            <label for="dropdown-checkbox" class="dropdown-escolha">
                Legenda das cores <span></span>
            </label>
            <ul class="dropdown-menu">
                @foreach (Cursoscontroller::mostrarcursos() as $curso)
                    <li>
                        <p>{{ $curso->nomecurso }}</p>
                        <div style="background-color:{{ $curso->cor }}"></div>
                    </li>
                @endforeach
            </ul>
        </div>


        <div class="menu">

            <label class="dropdown-escolha">
                <a href='{{ route('relatorio') }}'>
                    Relatório
                </a>
            </label>
        </div>
    </div>
    <div class="linha"></div>
    <div class="tabela">
        @foreach ($projetos as $projeto)
            <x-cards :projeto="$projeto"> </x-cards>
        @endforeach

    </div>
@endsection
