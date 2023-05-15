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
        <div class="container">
            
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
            <hr />
            <div class="map-container">
            </div>
            {{-- <x-ui.buttons.button class="someclass" type="sumbit" message="Узнать больше" ></x-ui.buttons.button> --}}
            {{-- <script src="https://api-maps.yandex.ru/3.0/?apikey=<API-ключ>&lang=ru_RU"></script> --}}
            {{-- <script src="https://api-maps.yandex.ru/2.1/?apikey=8a5d8b7a-70b0-42fd-9967-2a17d163ce055&lang=ru_RU"></script> --}}
        </div>
        </body>
</html>
