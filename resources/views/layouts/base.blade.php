<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Малые Этажи</title>

    <meta name="description" content="Малые этажи">
    <meta name="facebook-domain-verification" content="gnveojw4a5geu2vgt61ltivssc8d4m" />
    <meta property="og:locale" content="ru">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Малые этажи">
    <meta name="twitter:card" content="summary">

    <!-- maps -->
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
    @vite('resources/js/components/search.js')
    @vite('resources/css/components/search.css')
    @vite('resources/js/general/barba.js')

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href=" {{ Vite::image('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::image('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::image('favicon/favicon-16x16.png')}}">

    <link rel="mask-icon" href="{{ Vite::image('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(67008322, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/67008322" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

</head>

<body data-transition="malie-wrap">
    <div class="page-transition-container">
        <span class="page-transition"></span>
        <span class="page-transition"></span>
    </div>
    <div data-transition="container">
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
        <x-include.search></x-include.search>
    </div>
</body>

</html>