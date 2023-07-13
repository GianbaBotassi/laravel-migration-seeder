<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/new-led-display-st" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('components.header')

    @yield('content')

    @include('components.footer')

</body>

</html>
