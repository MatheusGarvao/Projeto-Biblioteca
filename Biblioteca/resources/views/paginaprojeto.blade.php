<?php use App\Http\Controllers\CursosController; ?>

@extends('layouts.paginas', ['text' => "$projeto->nomeprojeto"])


@section('estilos')
    <link href="{{ asset('css/Alerta.css') }}" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    <link href="{{ asset('css/PaginaProjetos.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('conteudo')
    @if (session('like') === 0)
        <label>
            <input type="checkbox" class="alertCheckbox" autocomplete="off" />
            <div class="alert error">
                <span class="alertClose">X</span>
                <span class="alertText">Você já curtiu esse projeto!
                    <br class="clear" /></span>
            </div>
        </label>
    @endif

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
                <?php $alunos = explode(',', $projeto->nomealuno); ?>
                @foreach ($alunos as $aluno)
                    <p>{{ $aluno }}</p>
                @endforeach
            </section>

            <section>
                <h3>Curso:</h3>
                <p>
                    {{ CursosController::mostrarCurso($projeto->fk_cursos_id)->nomecurso }}
                </p>
            </section>

            <div class="botaoprojeto">
                <h3>Clique no botão abaixo para abrir o link do projeto!</h3>
                <div>
                    <a target="_blank" href='{{ route('projeto.link', ['id' => $projeto->id]) }}'>
                        <div>PROJETO</div>
                    </a>
                </div>
            </div>
            <div class="botaoprojeto">
                <form method="POST" action="{{ route('projeto.like', ['id' => $projeto->id]) }}">
                    @csrf
                    <!-- Rest of the form code -->
                    <button type="submit" id="like"><i class="bx bx-like"></i>
                        {{ $projeto->quantidadelikes }}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="iframe-container">
        <iframe src='{{ $projeto->linkyoutube }}' title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <div id="disqus_thread"></div>
    <script>
        (function() {
            var d = document,
                s = d.createElement('script');
            s.src = 'https://biblioteca-de-trabalhos.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>
    <script id="dsq-count-scr" src="//biblioteca-de-trabalhos.disqus.com/count.js" async></script>
@endsection
