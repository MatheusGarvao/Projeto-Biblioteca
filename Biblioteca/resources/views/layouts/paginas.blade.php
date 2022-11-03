<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>

</head>

<body>

    <x-header />
    <div>
        @yield('conteudo')

    </div>

</body>

</html>
