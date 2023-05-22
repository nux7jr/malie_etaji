@extends ("layouts.base")

@section('head')
    {{-- @vite('resources/js/pages/home/home.js') --}}
    @vite('resources/css/pages/about/about.css')
@endsection

@section('content')
    <x-section.about-header></x-section.about-header>
    <section class="your-house">
        <div class="your-house__section">
            <div class="your-house__header">
                <h1 class="your-house__heading">Свой дом от “Малые этажи” </h1>
                <p class="your-house__paraf">
                    СК «Малые Этажи» входит в группу компаний Tiksan Group — компания лидер в строительной и
                    околостроительной
                    сфере. Мы заинтересованы в создании шедевра — Вашей загородной мечты, от этапа проектирования до
                    вручения
                    ключей.
                </p>
            </div>
            @for ($i = 0; $i < 4; $i++)
                <article class="your-house__wrapper">
                    <img class="your-house__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}" alt="fire">
                    <h3 class="your-house__act">Свой дом от “Малые этажи” </h3>
                    <p class="your-house__small-text">Lorem Ipsum является стандартной "рыбой" для текстов на латинице с
                        начала
                        XVI
                        века. </p>
                </article>
            @endfor
        </div>
    </section>
@endsection
