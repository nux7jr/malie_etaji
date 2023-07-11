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
    {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}

    <!-- maps -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=1b463e1c-30e3-4e94-b592-300f2f77b882"
        type="text/javascript"></script>
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    @vite('resources/js/general/pageChange.js')
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @yield('head')
    @stack('head')
    @vite('resources/css/components/modal.css')
    @vite('resources/js/components/modal.js')
    @vite('resources/js/components/mob-menu.js')
    @vite('resources/css/components/mob-menu.css')
    @vite('resources/js/components/search.js')
    @vite('resources/css/components/search.css')

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

    <!-- Top.Mail.Ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3366612", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "tmr-code");
</script>
<noscript><div><img src="https://top-fwz1.mail.ru/counter?id=3366612;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div></noscript>
<!-- /Top.Mail.Ru counter -->
</head>
<body>
    <div class="page-transition-container">
        <lottie-player class="page-transition-loader" src="/files/load.json" background="transparent"  speed="2"  style="width: 300px; height: 300px;" loop autoplay>
        </lottie-player>
        {{-- <svg width="62" height="59" viewBox="0 0 62 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="main-slider__preloader-path" d="M3 26 31 4l28 22v30H3V26z" stroke="#96A0AA" stroke-width="6" style="--svg-total-length: 187.2179718017578px; stroke-dashoffset: 0.001; stroke-dasharray: 0px, 999999px;"></path>
        </svg> --}}
        <h1 class="page-transition-container__heading">
            “Малые этажи” самая рекомендуемая строительная компания!
        </h1>
    </div>
    <div class="page-container">
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