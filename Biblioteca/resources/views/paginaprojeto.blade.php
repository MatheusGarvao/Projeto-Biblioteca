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

        </div>
    </div>

    </div>

    <div id="disqus_thread"></div>
    <script>
        (function() {
            var d = document,
                s = d.createElement('script');
            s.src = 'https://biblioteca-de-trabalhos.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            window.DISQUSWIDGETS = undefined;
            (d.head || d.body).appendChild(s);
        })();



    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>
    <script id="dsq-count-scr" src="//biblioteca-de-trabalhos.disqus.com/count.js" async></script>
@endsection
