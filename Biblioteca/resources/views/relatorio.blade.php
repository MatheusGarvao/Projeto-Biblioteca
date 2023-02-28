<?php use App\Http\Controllers\PrincipalController; ?>

@extends('layouts.paginas', ['text' => 'Relatório'])

@section('estilos')
    <link href="{{ asset('css/Relatorio.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('conteudo')
    <table id="conteudo">
        <tbody>

            <tr class='titulos'>
                <td rowspan="2">
                    <table class='conteudoespecifico'>
                        <tbody>
                            <tr>
                                <td>
                                    Página Principal
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Quantidade de visitas: {{ PrincipalController::getPrincipais(1)->quantidadevisitadas }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </td>
                <td rowspan="2">
                    <table class='conteudoespecifico'>
                        <tbody>
                            <tr>
                                <td>
                                    Página de Relatório
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Quantidade de visitas: {{ PrincipalController::getPrincipais(2)->quantidadevisitadas }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>


        </tbody>
    </table>
    <table class="projetos">
        <tbody>
            <tr>
                <td colspan="4">
                    Quantidade de projetos: {{ PrincipalController::getQuantidadeProjetos() }}
                </td>
            </tr>
            <tr>
                <td>
                    Nome do projeto
                </td>
                <td>
                    Quantidade de visitas
                </td>
                <td>
                    Quantidade de acessos
                </td>
                <td>
                    Quantidade de comentários
                </td>

            </tr>

            @foreach ($projetos as $projeto)
                <tr>
                    <td colspan="4">
                        <a href='{{ route('relatorio.projeto', ['id' => $projeto->id]) }}'>
                            <table class="projetos">
                                <tbody>
                                    <tr>
                                        <td>

                                            {{ $projeto->nomeprojeto }}

                                        </td>
                                        <td>

                                            {{ $projeto->quantidadevisitadas }}

                                        </td>
                                        <td>

                                            {{ $projeto->quantidadeclicklink }}

                                        </td>
                                        <td class="disqus-comment-count"
                                            data-disqus-url="{{ route('projeto.pagina', ['id' => $projeto->id]) }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script id="dsq-count-scr" src="//biblioteca-de-trabalhos.disqus.com/count.js" async>
        DISQUSWIDGETS.getCount({
            reset: true
        })
    </script>
@endsection
