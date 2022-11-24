<?php use App\Http\Controllers\CursosController; ?>

<div class="cartao" style="border-top: 5px solid {{ CursosController::mostrarCurso($projeto->codigocurso)->cor }};">
    <a href="{{ route('projeto.pagina', ['id' => $projeto->id] ) }}" >

        <div class="titulo"><strong>{{ $projeto->nomeprojeto }}</strong></div>
        <div class="descricao">{{ $projeto->descricao }}</div>
    </a>

</div>

