<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$text}}</title>
    <link rel="icon" href="{{ asset('storage/imagens/Logo.svg') }}">
    @yield('estilos')
</head>

<body>

    <x-header :text="$text"></x-header>

    @yield('conteudo')

</body>

</html>
