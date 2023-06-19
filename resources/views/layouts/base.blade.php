<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Малые Этажи</title>

    {{-- maps --}}
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=1b463e1c-30e3-4e94-b592-300f2f77b882"
        type="text/javascript"></script>
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @yield('head')
    @stack('head')
    @vite('resources/css/components/modal.css')
    @vite('resources/js/components/modal.js')
    @vite('resources/js/components/mob_menu.js')
    @vite('resources/css/components/mob_menu.css')
    @php
        if (!isset($city)){
            $city = [];
            $city['show']['name'] = 'Красноярск';
            $city['show']['code'] = 'krasnoyarsk';
            $city['hidden'][0]['code'] = 'irkutsk';
            $city['hidden'][0]['name'] = 'Иркутск';
            $city['hidden'][1]['code'] = 'vladivostok';
            $city['hidden'][1]['name'] = 'Владивосток';
            $city['hidden'][2]['code'] = 'barnaul';
            $city['hidden'][2]['name'] = 'Барнаул';
            $city['hidden'][3]['code'] = 'tumen';
            $city['hidden'][3]['name'] = 'Тюмень';
            $city['hidden'][4]['code'] = 'ekb';
            $city['hidden'][4]['name'] = 'Екатеринбург';
            $city['hidden'][5]['code'] = 'perm';
            $city['hidden'][5]['name'] = 'Пермь';
        }
    @endphp
</head>
<body>
    <x-include.header path={{ $path }} city={!!json_encode($city)!!}></x-include.header>
    <div id="app" class="app">
        <div class="container">
            <div class="main-page">
                @yield('content')
            </div>
        </div>
    </div>
    <x-include.mob_menu></x-include.mob_menu>
    <x-include.footer></x-include.footer>
    <x-include.modals></x-include.modals>
</body>

</html>
