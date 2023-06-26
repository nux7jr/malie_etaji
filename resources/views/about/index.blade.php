@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/about/about.js')
@vite('resources/css/pages/about/about.css')


@endsection

@section('content')

@php
use App\Content\main\AboutHeading;
$about_heading = new AboutHeading();
$format_info = $about_heading->toArray();

use App\Content\main\YourHouse;
$yourHouse = (new YourHouse())->toArray();


use App\Content\main\AboutGallery;
$aboutGallery = (new AboutGallery())->toArray();

use App\Content\main\Service;
$service = (new Service())->toArray();
@endphp

<x-section.about-header format={!!json_encode($format_info)!!} paths={!!json_encode($paths)!!}>
</x-section.about-header>


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
        <div class="your-house__swipers swiper">
            <div class="your-house__wrapper swiper-wrapper">

                @foreach ($yourHouse as $item) <article class="swiper-slide">
                    <div class="your-house__info">
                        <img class="your-house__img" src='{{$item["img"]}}' alt="fire">
                        <h3 class="your-house__act">
                            {{$item['title']}}
                        </h3>
                        <p class="your-house__small-text">
                            {{$item['text']}}
                        </p>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="swiper-button-prev your-house__button-prev">
                <img class="your-house-prev your-house_icno" src="{{ Vite::asset('resources/images/build/next.svg') }}"
                    alt="prev">
            </div>
            <div class="swiper-button-next your-house__button-next">
                <img class="your-house-next your-house_icno" src="{{ Vite::asset('resources/images/build/next.svg') }}"
                    alt="next">
            </div>
        </div>
    </div>
</section>
<section class="building-maps" id='building-maps'>
    <div class="building-maps__header">
        <h1 class="building-maps__heading">
            {{__('Карта объектов')}}
        </h1>
        <p class="building-maps__paraf">
            {{__('На карте отображены реализованные проекты. При нажатии на иконку появится дополнительная информация, а
            по
            ссылке ниже можно перейти к подробной информации о проекте – визуализация проекта, поэтажные планы, фасады,
            фото готового объекта. На странице понравившегося проекта также можно оставить заявку или задать
            вопросы.')}}
        </p>
    </div>

    <div class="map-container" id="map-container">
    </div>
    <div class="map__wrapper">
        <div class="map__option">
            <button class="map_all default__button map__button map__button--active">{{__('Построенные
                объекты')}}</button>
            <button class="map_plots default__button map__button">{{__('Участки')}}</button>
        </div>
    </div>
</section>
<section class="stable">
    <div class="stable__header">
        <h1 class="stable__heading">
            {{__('Почему “Малые этажи” стабильная компания?')}}
        </h1>
        <div class="why-us__wraps">
            <p class="why-us__paraf">
                {{ __('Наша команда высококвалифицированных архитекторов, инженеров, строителей и менеджеров.') }}
            </p>
            <p class="why-us__paraf">
                {{ __('Компания строго следит за соблюдением сроков строительства.') }}
            </p>
            <p class="why-us__paraf">
                {{ __('Клиенты компании "Малые этажи" получают не только высококачественные современные дома, но и
                полную уверенность в надежности и безопасности своей инвестиции.') }}
            </p>
        </div>
    </div>
    <div class="stable__list">
        @php
        $why = [
        '0' => [
        "title" => '120',
        "subtitle" => 'объектов',
        "text" => 'Мы продолжаем работать над улучшением качества и сроков выполнения строительных работ, чтобы вы жили в лучших домах.',
        ],
        '1' => [
        "title" => '7',
        "subtitle" => 'регионов присутствия',
        "text" => 'Мы строим в Красноярске, Перми, Екатеринбурге, Тюмени, Барнауле, Иркутске и Владивостоке.',
        ],
        '2' => [
        "title" => '+10',
        "subtitle" => 'лет опыта работы',
        "text" => 'Ваш дом — результат нашего огромного, в том числе, международного опыта в проектировании и строительстве.',
        ],
        '3' => [
        "title" => '11',
        "subtitle" => 'банков партнеров',
        "text" => 'Аккредитованы во всех крупных банках: Дом.РФ, Сбер, РоссельхозБанк, ВТБ, РосБанк, ПримСоцБанк, Левобережный, СургутНефтегазБанк, ПочтаБанк, СовкомБанк, МТСБанк.',
        ]
        ];
        @endphp
        @foreach ($why as $item) <div class="stable-card">
            <h1 class="stable-card__heading">
                {{$item['title']}}
                <span class="stable-card__heading-small">{{$item['subtitle']}}</span>
            </h1>
            <p class="stable-card__paraf">{{$item['text']}}</p>
        </div>
        @endforeach
    </div>
    <a class="stable__video" data-fslightbox="video"
        style="background-image: url({{ Vite::asset('resources/images/about/leader.jpg')}})"
        data-video-poster="{{ Vite::asset('resources/images/about/leader.jpg')}}" href="/video/main/1.mov">
        <h1 class="stable__video-h1">
            {{__('Посмотрите видео от директора Малых этажей')}}
        </h1>
        <p class="stable__video-paraf">
            {{__('От руководителя отдела продаж ФСК "Малые этажи" Владислава Горковенко')}}</p>
    </a>
</section>
<section id="all-services" class="all-services">
    <h1 class="all-services__heading">
        {{__('Услуги компании «Малые этажи»')}}

    </h1>
    <div class="all-services__inner services-filters">
        <div class="services-filters__option">
            <button data-filter="escort" data-title="{{__('Сопровождение покупки')}}"
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
        </div>
        <div class="services-filters__content">
            <h1 class="services-filters__heading">{{__('Сопровождение покупки')}}</h1>
            <div class="services-filters__wrapper">

                @foreach ($service as $item)
                <div class="services-filters__item {{ $item['filter'] }}">
                    <div class="services-filters__header">
                        <div class="services-filters__head">
                            <img class="services-filters__img" src="{{ $item['icon'] }}" alt="icon">
                            <div class="services-filters__text">
                                <h3 class="services-filters__info">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="services-filters__text">
                                    {{ $item['text'] }} </p>
                            </div>
                        </div>
                        <button data-modal_id="modal__income" data-info={{$item['heading']}}
                            class="default__button service__button">
                            {{__('Отправить заявку')}}</button>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>




<x-section.case>
</x-section.case>
{{-- <x-section.certificates>
</x-section.certificates> --}}
<section class="photo-gallery" id='gallery'>
    <div class="photo-wrapper">
        <div class="photo-header">
            <h1 class="photo-gallery__heading">
                {{__('Фотографии')}}

            </h1>
            <p class="photo-gallery__paraf">
                {{__('Узнайте больше о наших проектах через фотографии строящихся объектов. Посмотрите снимки наших
                малоэтажных домов на разных этапах строительства, чтобы увидеть, как мы превращаем идеи в
                реальность.')}}
            </p>
        </div>
        <div class="swiper photo-gallery__swiper">
            <div class="swiper-wrapper photo-gallery__wrapper">
                @foreach ($aboutGallery as $item) <div class="swiper-slide photo-gallery__slide">
                    <div class="photo-gallery__img" style="background-image: url({{$item}})">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination photo-pagination  photo-gallery__pagination">
            </div>
            <div class="photo-gallery__option">
                <div class="photo-gallery__button-prev">
                    <img class="photo-gallery-prev" src="{{ Vite::asset('resources/images/build/next.svg') }}"
                        alt="prev">
                </div>
                <div class="photo-gallery__button-next">
                    <img class="photo-gallery-next" src="{{ Vite::asset('resources/images/build/next.svg') }}"
                        alt="next">
                </div>
            </div>
        </div>
</section>
<x-section.order class="order-about">
</x-section.order>
<x-section.grid-template>
</x-section.grid-template>
@endsection
