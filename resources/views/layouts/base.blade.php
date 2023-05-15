<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Малые Этажи</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">


    <!-- Boundle -->
    @vite("resources/css/app.css")
    @vite("resources/js/app.js")
</head>
<body>
<x-include.header></x-include.header>
<div id="app" class="app">
    <div class="container">
        <div class="main-page">
            @yield('content')
        </div>
    </div>
</div>


<div class="watermarks">Smart Core | {{ now()->year }} | alpha | {{ App::VERSION() }} </div>
</body>
</html>
