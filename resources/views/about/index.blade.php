@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/about/about.js')
@vite('resources/css/pages/about/about.css')
@endsection

@section('content')

{{-- @php
dd($path)
@endphp --}}


<x-section.about-header paths={!!json_encode($paths)!!}></x-section.about-header>

<section class="your-house">
    <div class="your-house__section">
        <div class="your-house__header">
            <h1 class="your-house__heading">
                {{__('Свой дом от “Малые этажи”')}}
            </h1>
            <p class="your-house__paraf">
                {{__('СК «Малые Этажи» входит в группу компаний Tiksan Group — компания лидер в строительной и
                околостроительной
                сфере. Мы заинтересованы в создании шедевра — Вашей загородной мечты, от этапа проектирования до
                вручения
                ключей.')}}

            </p>
        </div>
        <div class="your-house__wrapper">
            @for ($i = 0; $i < 4; $i++) <article class="your-house__info">
                <img class="your-house__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}" alt="fire">
                <h3 class="your-house__act">
                    {{__('Свой дом от “Малые этажи”')}}
                </h3>
                <p class="your-house__small-text">
                    {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с
                    начала
                    XVI
                    века.')}}
                </p>
                </article>
                @endfor
        </div>
    </div>
</section>
<section class="building-maps">
    <div class="building-maps__header">
        <h1 class="building-maps__heading">
            {{__('Карта построенных объектов')}}
        </h1>
        <p class="building-maps__paraf">
            {{__('На карте отображены реализованные проекты. При нажатии на иконку появится дополнительная информация, а
            по
            ссылке ниже можно перейти к подробной информации о проекте – визуализация проекта, поэтажные планы, фасады,
            фото готового объекта. На странице понравившегося проекта также можно оставить заявку или задать
            вопросы.')}}

        </p>
    </div>
    <div class="map-container">
    </div>
</section>
<section class="stable">
    <div class="stable__header">
        <h1 class="stable__heading">
            {{__('Почему “Малые этажи” стабильная компания?')}}
        </h1>
        <p class="stable__text-paraf">
            {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
            безымянный печатник создал большую коллекцию размеров и форм шрифтов.')}}
        </p>
    </div>
    <div class="stable__list">
        @for ($i = 0; $i < 4; $i++) <div class="stable-card">
            <h1 class="stable-card__heading">
                {{__('20')}}
                <span class="stable-card__heading-small">{{__('построенных домов')}}</span>
            </h1>
            <p class="stable-card__paraf">{{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с
                начала XVI века.')}}</p>
    </div>
    @endfor
    </div>
    <a class="stable__video" data-fslightbox="youtube-video" data-video-poster="https://placehold.co/255x300"
        href="https://www.youtube.com/watch?v=d4eDWc8g0e0">
        <h1 class="stable__video-h1">
            {{__('Посмотрите видео от директора Малых этажей')}}
        </h1>
        <p class="stable__video-paraf">
            {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.')}}</p>
    </a>
</section>
<section id="all-services" class="all-services">
    <h1 class="all-services__heading">
        {{__('Услуги компании «Малые этажи»')}}

    </h1>
    <div class="all-services__inner services-filters">
        <div class="services-filters__option">
            <button data-filter="support" data-title="{{__('Сопровождение покупки')}}"
                class="default__button services-filters__button services-filters__button--active">
                {{__('Сопровождение покупки')}}

            </button>
            <button data-filter="design" data-title="{{__('Проектирование')}}"
                class="default__button services-filters__button">
                {{__('Проектирование')}}

            </button>
            <button data-filter="building" data-title="{{__('Строительство')}}"
                class="default__button services-filters__button">
                {{__('Строительство')}}

            </button>
            <button data-filter="support" data-title="{{__('Инженерные услуги')}}"
                class="default__button services-filters__button">
                {{__('Инженерные услуги')}}

            </button>
            <button data-filter="special" data-title="{{__('Специалисты')}}"
                class="default__button services-filters__button">
                {{__('Специалисты')}}
            </button>
        </div>
        <div class="services-filters__content">
            <h1 class="services-filters__heading">{{__('Сопровождение покупки')}}</h1>
            <div class="services-filters__wrapper">
                @for ($i = 0; $i < 10; $i++) <div class="services-filters__item support">
                    <div class="services-filters__header">
                        <img class="services-filters__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}"
                            alt="">
                        <div class="services-filters__head">
                            <h3 class="services-filters__info">
                                {{__('Ипотека')}}
                            </h3>
                            <p class="services-filters__text">
                                {{__('Специальные условия для клиентов “Малые этажи”')}}
                            </p>
                        </div>
                    </div>
                    <button class="default__button">
                        {{__('Отправить заявку')}}</button>
            </div>
            @endfor
            @for ($i = 0; $i < 4; $i++) <div class="services-filters__item design">
                <div class="services-filters__header">
                    <img class="services-filters__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}"
                        alt="">
                    <div class="services-filters__head">
                        <h3 class="services-filters__info">
                            {{__('design')}}
                        </h3>
                        <p class="services-filters__text">
                            {{__('Специальные условия для клиентов “Малые этажи”')}}</p>
                    </div>
                </div>
                <button class="default__button">
                    {{__('Отправить заявку')}}</button>
        </div>
        @endfor
        @for ($i = 0; $i < 5; $i++) <div class="services-filters__item building">
            <div class="services-filters__header">
                <img class="services-filters__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}" alt="">
                <div class="services-filters__head">
                    <h3 class="services-filters__info">
                        {{__('building')}}
                    </h3>
                    <p class="services-filters__text">
                        {{__('Специальные условия для клиентов “Малые этажи”')}}</p>
                </div>
            </div>
            <button class="default__button">
                {{__('Отправить заявку')}}
            </button>
    </div>
    @endfor
    @for ($i = 0; $i < 5; $i++) <div class="services-filters__item special">
        <div class="services-filters__header">
            <img class="services-filters__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}" alt="">
            <div class="services-filters__head">
                <h3 class="services-filters__info">
                    {{__('special')}}</h3>
                <p class="services-filters__text">
                    {{__('Специальные условия для клиентов “Малые этажи”')}}
                </p>
            </div>
        </div>
        <button class="default__button">
            {{__('Отправить заявку')}}
        </button>
        </div>
        @endfor
        </div>
        </div>
        </div>
</section>
<x-section.tech>
</x-section.tech>
<x-section.certificates>
</x-section.certificates>
<section class="photo-gallery">
    <div class="photo-wrapper">
        <div class="photo-header">
            <h1 class="photo-gallery__heading">
                {{__('Фотографии')}}

            </h1>
            <p class="photo-gallery__paraf">
                {{__('Lorem Ipsum является стандартной "рыбой" для текстов
                на латинице с начала XVI века. В то время некий безымянный
                печатник создал большую коллекцию размеров и форм шрифтов.')}}

            </p>
        </div>
        <div class="swiper photo-gallery__swiper">
            <div class="swiper-wrapper photo-gallery__wrapper">
                @for ($i = 0; $i < 15; $i++) <div class="swiper-slide photo-gallery__slide">
                    <div class="photo-gallery__img" style="background-image: url(https://placehold.co/228x313)">
                    </div>
            </div>
            @endfor
        </div>
        <div class="swiper-pagination photo-pagination  photo-gallery__pagination">
        </div>
        <div class="photo-gallery__option">
            <div class="photo-gallery__button-prev">
                <img class="photo-gallery-prev" src="{{ Vite::asset('resources/images/build/next.svg') }}" alt="prev">
            </div>
            <div class="photo-gallery__button-next">
                <img class="photo-gallery-next" src="{{ Vite::asset('resources/images/build/next.svg') }}" alt="next">
            </div>
        </div>
    </div>
</section>
<x-section.order class="order-about">
</x-section.order>
<x-section.grid-template>
</x-section.grid-template>
@endsection