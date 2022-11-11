@extends('layouts.paginas',['text'=>"Biblioteca de Trabalhos"])



@section('estilos')
    <link href="{{ asset('css/Header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/Padrao.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/Cards.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('conteudo')
    <div class="tabela">
        @foreach ($projetos as $projeto)
            <x-cards :projeto="$projeto"> </x-cards>
        @endforeach


    </div>

@endsection
