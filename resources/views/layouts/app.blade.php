<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aurélien Chappard - @yield('title')</title>
    @vite(['resources/scss/app.scss'])
</head>
<body>
@yield('content')
</body>
</html>
