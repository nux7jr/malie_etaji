@php
use App\Content\main\AdvantagesCard;
$advantages = new AdvantagesCard();

use App\Content\main\WhichHouse;
$which_house = new WhichHouse();

use App\Content\main\BuiltHouses;
$built_houses = (new BuiltHouses())->toArray();

use App\Content\main\HousesInfo;


use App\Content\main\Service;
$service = (new Service())->toArray();
@endphp
@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/home/home.js')
@vite('resources/css/pages/home/home.css')
@endsection

@section('content')
<section class="offer">
    <div class="offer__head">
        <h1 class="offer__number">{{__('>120 домов')}}</h1>
        <h1 class="offer__quantity">{{__('уже построено благодаря компании “Малые этажи”')}}</h1>
    </div>
    <div class="offer__container">
        <div class="main-offer offer-swiper swiper">
            <div class="offer-wrapper swiper-wrapper">
                <div class="offer-slide swiper-slide"
                    style="background-image: url({{ Vite::asset('resources/images/home/1.png') }})">
                    <div class="offer-slider__inner">
                        <h1 class="main-offer__heading">{{ __('Ипотека от 2,7%') }}</h1>
                        <p class="main-offer__paraf">
                            {{ __('Совместно с банками партнерами мы предлагаем самые выгодные ставки по загородной
                            ипотеке.') }}
                        </p>
                        <button data-modal_id='modal__cell' data-ym='ipoteka_glavn'
                            class="default__button main-offer__button">{{ __('Узнать
                            больше')
                            }}</button>
                    </div>
                </div>
                {{-- <div class="offer-slide swiper-slide" style="background-image: url(https://placehold.co/500x500)">
                    <div class="offer-slider__inner">
                        <h1 class="main-offer__heading">{{ __('Клиент-тур на строительные объекты') }}</h1>
                        <p class="main-offer__paraf">
                            {{ __('Записывайтесь на бесплатные групповые экскурсии по нашим объектам и получайте
                            выгодные
                            условия строительства с нами') }}
                        </p>
                        <button data-modal_id='modal__cell' class="default__button main-offer__button">{{ __('Узнать
                            больше')
                            }}</button>
                    </div>
                </div>
                <div class="offer-slide swiper-slide" style="background-image: url(https://placehold.co/1000x800)">
                    <div class="offer-slider__inner">
                        <h1 class="main-offer__heading">{{ __('Дом вдвое дешевле городской квартиры') }}</h1>
                        <p class="main-offer__paraf">
                            {{ __('Строим современные энергоэффективные дома для жизни на природе') }}
                        </p>
                        <button class="default__button main-offer__button">{{ __('Узнать больше') }}</button>
                    </div>
                </div> --}}
            </div>
            <div class="swiper-pagination offer-slide__pagination"></div>
        </div>
        <div class="offer__wrapper">
            <div class="sec-offer">
                <h1 class="sec-offer__heading">{{ __('Клиент-тур на строительные объекты') }}</h1>
                <p class="sec-offer__paraf">
                    {{ __('Записывайтесь на бесплатные групповые экскурсии по нашим объектам и получайте выгодные
                    условия
                    строительства с нами') }}
                </p>
                <button class="sec-offer__button">
                    <img data-modal_id="modal__income" data-ym="client_tur" class="sec-offer__img"
                        src="{{ Vite::asset('resources/images/icons/offer_arr.svg') }}" alt="offer">
                </button>
            </div>
            <div class="sec-offer">
                <h1 class="sec-offer__heading">{{ __('Дом вдвое дешевле городской квартиры') }}</h1>
                <p class="sec-offer__paraf">
                    {{ __('Строим современные энергоэффективные дома для жизни на природе') }}
                </p>
                <a href="/projects" class="sec-offer__button">
                    <img class="sec-offer__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                        alt="offer">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="which-house">
    <div class="which-house__wrapper">
        @foreach($which_house->toArray() as $item) <x-ui.cards.autoplay title="{{$item['text']}}"
            background="{{$item['background']}}" linkText="{{$item['link']['text']}}" link="{{$item['link']['link']}}"
            video="{{$item['video']}}">
        </x-ui.cards.autoplay>
        @endforeach
    </div>
</section>

<section class="why-us">
    <div class="why-us__wrapper">
        <div class="why-us__info">
            <h1 class="why-us__heading">
                {{ __('Почему “Малые этажи” стабильная компания?') }}
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
        <div class="why-us__card-wrapper">
            @php
            $why = [
            '0' => [
            "title" => '120',
            "subtitle" => 'готовых домов',
            "text" => ' Мы продолжаем работать над улучшением качества и сроков выполнения строительных работ, чтобы вы
            жили в лучших домах.',
            ],
            '1' => [
            "title" => '7',
            "subtitle" => 'регионов присутствия',
            "text" => 'Мы строим в Красноярске, Перми, Екатеринбурге, Тюмени, Барнауле, Иркутске и Владивостоке.',
            ],
            '2' => [
            "title" => '+10',
            "subtitle" => 'лет опыта работы',
            "text" => 'Ваш дом — результат нашего огромного, в том числе, международного опыта в проектировании и
            строительстве.',
            ],
            '3' => [
            "title" => '11',
            "subtitle" => 'банков партнеров',
            "text" => 'Аккредитованы во всех крупных банках: Дом.РФ, Сбер, РоссельхозБанк, ВТБ, РосБанк, ПримСоцБанк,
            Левобережный, СургутНефтегазБанк, ПочтаБанк, СовкомБанк, МТСБанк. ',
            ]
            ];
            @endphp

            @foreach ($why as $item) <div class="why-us__card">
                <h3 class="why-us__header">
                    <span class="why-us__title">
                        {{$item["title"]}}
                    </span>
                    <span class="why-us__subtitle">
                        {{$item["subtitle"]}}
                    </span>
                </h3>
                <p class="why_us__text">
                    {{$item["text"]}}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="build">
    <div class="build__wrapper">
        <div class="build__header">
            <h1 class="build__heading">
                {{ __('Дома, которые мы построили') }}
            </h1>
            <p class="build__paraf">
                {{ __('Наши готовые решения включают всё необходимое для полноценной жизни в доме: коммуникации, септик,
                скважина для водоснабжения, вентиляция, электричество, установка розеток. Полное решение «под ключ» и
                также наружная и внутренняя отделка «белый куб».') }}
            </p>
        </div>
        <div class="build__option">
            <button class="default__button build__button build__button--active" data-filter="all">{{ __('Все')
                }}</button>
            <button class="default__button build__button" data-filter="single">{{ __('Одноэтажные') }}</button>
            {{-- <button class="default__button build__button" data-filter="double">{{ __('Двухэтажные') }}</button>
            --}}
            <button class="default__button build__button" data-filter="barn">{{ __('Барны') }}</button>
        </div>
        <div class="swiper build-swiper">
            <div class="swiper-wrapper build-wrapper">
                @foreach ($built_houses as $item)
                <div class="swiper-slide build-slide {{ $item['filter'] }}">
                    <div class="build-inner">
                        <div class="swiper image-swiper">
                            <div class="swiper-wrapper image-wrapper">
                                @foreach ($item['img'] as $img)
                                <div class="swiper-slide image-slide" style="background-image: url('{{ $img }}');">
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination image__pagination"></div>
                        </div>
                        <div class="build-inner__item inner-info">
                            <h1 class="inner-info__heading">{{ $item['name'] }}</h1>
                            <p class="inner-info__paraf">
                                {{ $item['about'] }}
                            </p>
                            <div class="inner-time">
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">{{$item['info']['square']}} <span
                                            class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">{{$item['info']['time']}} <span
                                            class="inner-time__text">месяцев</span></p>
                                    <p class="inner-time-info">
                                        Всемя стройки
                                    </p>
                                </div>
                            </div>
                            <div class="inner-price">
                                <p class="inner-price__value">{{$item['info']['price']}} <span
                                        class="inner-price__text">рублей</span>
                                </p>
                                <p class="inner-price__info">
                                    Стоимость дома
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                @endforeach


                {{-- <div class="swiper-slide build-slide single">
                    <div class="build-inner">
                        <div class="swiper image-swiper">
                            <div class="swiper-wrapper image-wrapper">
                                <div class="swiper-slide image-slide">
                                </div>
                                <div class="swiper-slide image-slide"
                                    style="background-image: url('https://placehold.co/600x400');">
                                </div>
                            </div>
                            <div class="swiper-pagination image__pagination"></div>
                        </div>
                        <div class="build-inner__item inner-info">
                            <h1 class="inner-info__heading">{{ __('Дом 8-02К (Шале), Мужичкино') }}</h1>
                            <p class="inner-info__paraf">
                                {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.') }}
                            </p>
                            <div class="inner-time">
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">80 <span class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">80 <span class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                            </div>
                            <div class="inner-price">
                                <p class="inner-price__value">5 667 789 <span class="inner-price__text">рублей</span>
                                </p>
                                <p class="inner-price__info">
                                    Стоимость дома
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide build-slide double">
                    <div class="build-inner">
                        <div class="swiper image-swiper">
                            <div class="swiper-wrapper image-wrapper">
                                <div class="swiper-slide image-slide">
                                </div>
                                <div class="swiper-slide image-slide" style="background-color: black">
                                </div>
                            </div>
                            <div class="swiper-pagination image__pagination"></div>
                        </div>
                        <div class="build-inner__item inner-info">
                            <h1 class="inner-info__heading">{{ __('Дом 8-02К (Шале), Мужичкино') }}</h1>
                            <p class="inner-info__paraf">
                                {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.') }}
                            </p>
                            <div class="inner-time">
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">80 <span class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">80 <span class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                            </div>
                            <div class="inner-price">
                                <p class="inner-price__value">5 667 789 <span class="inner-price__text">рублей</span>
                                </p>
                                <p class="inner-price__info">
                                    Стоимость дома
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide build-slide double">
                    <div class="build-inner">
                        <div class="swiper image-swiper">
                            <div class="swiper-wrapper image-wrapper">
                                <div class="swiper-slide image-slide">
                                </div>
                                <div class="swiper-slide image-slide" style="background-color: black">
                                </div>
                            </div>
                            <div class="swiper-pagination image__pagination"></div>
                        </div>
                        <div class="build-inner__item inner-info">
                            <h1 class="inner-info__heading">{{ __('Дом 8-02К (Шале), Мужичкино') }}</h1>
                            <p class="inner-info__paraf">
                                {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.') }}
                            </p>
                            <div class="inner-time">
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">80 <span class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">80 <span class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                            </div>
                            <div class="inner-price">
                                <p class="inner-price__value">5 667 789 <span class="inner-price__text">рублей</span>
                                </p>
                                <p class="inner-price__info">
                                    Стоимость дома
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide build-slide double">
                    <div class="build-inner">
                        <div class="swiper image-swiper">
                            <div class="swiper-wrapper image-wrapper">
                                <div class="swiper-slide image-slide">
                                </div>
                                <div class="swiper-slide image-slide" style="background-color: black">
                                </div>
                            </div>
                            <div class="swiper-pagination image__pagination"></div>
                        </div>
                        <div class="build-inner__item inner-info">
                            <h1 class="inner-info__heading">{{ __('Дом 8-02К (Шале), Мужичкино') }}</h1>
                            <p class="inner-info__paraf">
                                {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.') }}
                            </p>
                            <div class="inner-time">
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">80 <span class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">80 <span class="inner-time__text">м2</span></p>
                                    <p class="inner-time-info">
                                        Площадь дома
                                    </p>
                                </div>
                            </div>
                            <div class="inner-price">
                                <p class="inner-price__value">5 667 789 <span class="inner-price__text">рублей</span>
                                </p>
                                <p class="inner-price__info">
                                    Стоимость дома
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide build-slide barn">
                    <div class="build-inner">
                        <div class="swiper image-swiper">
                            <div class="swiper-wrapper image-wrapper">
                                <div class="swiper-slide image-slide">
                                </div>
                                <div class="swiper-slide image-slide" style="background-color: black">
                                </div>
                            </div>
                            <div class="swiper-pagination image__pagination"></div>
                        </div>
                        <div class="build-inner__item inner-info">
                            <h1 class="inner-info__heading">{{ __('Дом 8-02К (Шале), barn') }}</h1>
                            <p class="inner-info__paraf">
                                {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.') }}
                            </p>
                            <div class="inner-time">
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">{{ __('80') }} <span class="inner-time__text">{{
                                            __('м2') }}</span></p>
                                    <p class="inner-time-info">
                                        {{ __('Площадь дома') }}

                                    </p>
                                </div>
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">{{ __('80') }} <span class="inner-time__text">{{
                                            __('м2') }}</span></p>
                                    <p class="inner-time-info">
                                        {{ __('Площадь дома') }}

                                    </p>
                                </div>
                            </div>
                            <div class="inner-price">
                                <p class="inner-price__value">{{ __('15 667 789') }} <span class="inner-price__text">{{
                                        __('рублей') }}</span>
                                </p>
                                <p class="inner-price__info">
                                    {{ __('Стоимость дома') }}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide build-slide barn">
                    <div class="build-inner">
                        <div class="swiper image-swiper">
                            <div class="swiper-wrapper image-wrapper">
                                <div class="swiper-slide image-slide">
                                </div>
                                <div class="swiper-slide image-slide" style="background-color: black">
                                </div>
                            </div>
                            <div class="swiper-pagination image__pagination"></div>
                        </div>
                        <div class="build-inner__item inner-info">
                            <h1 class="inner-info__heading">{{ __('Дом 8-02К (Шале), barn') }}</h1>
                            <p class="inner-info__paraf">
                                {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
                                века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов.') }}
                            </p>
                            <div class="inner-time">
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">
                                        {{ __('80') }}
                                        <span class="inner-time__text">
                                            {{ __('м2') }}
                                        </span>
                                    </p>
                                    <p class="inner-time-info">
                                        {{ __('Площадь дома') }}
                                    </p>
                                </div>
                                <div class="inner-time__item">
                                    <p class="inner-time__paraf">
                                        {{ __('80 ') }}
                                        <span class="inner-time__text">
                                            {{ __('м2') }}
                                        </span>
                                    </p>
                                    <p class="inner-time-info">
                                        {{ __('Площадь дома') }}

                                    </p>
                                </div>
                            </div>
                            <div class="inner-price">
                                <p class="inner-price__value">
                                    {{ __('15 667 789 ') }}
                                    <span class="inner-price__text">
                                        {{ __('рублей') }}
                                    </span>
                                </p>
                                <p class="inner-price__info">
                                    {{ __('Стоимость дома') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="build-wrapper__navigation">
                <div class="build-wrapper__option">
                    <div class="swiper-button-next build-button-next">
                        <img class="mobile_nav-next mobile_nav"
                            src="{{ Vite::asset('resources/images/build/next.svg') }}" alt="icon">
                    </div>
                    <div class="swiper-button-prev build-button-prev">
                        <img class="mobile_nav-prev mobile_nav"
                            src="{{ Vite::asset('resources/images/build/next.svg') }}" alt="icon">
                    </div>
                </div>
                <div class="swiper-pagination build__pagination"></div>
            </div>
        </div>
    </div>
</section>
{{-- <x-section.tech>
</x-section.tech> --}}
<x-section.reels>
</x-section.reels>

<x-section.constructor>
</x-section.constructor>


<section class="advantages">
    <h1 class="advantages__heading">
        {{ __('Наши преимущества') }}
    </h1>
    <div class="advantages__wrapper">
        @foreach($advantages->toArray() as $advantage)
        <div class="advantages-card">
            <img class="advantages-card__img" src="{{$advantage['img']}}" alt="advantages">
            <p class="advantages-card__paraf">
                {{$advantage['text']}}
            </p>
        </div>
        @endforeach
    </div>
</section>
<x-section.order>
</x-section.order>

<section class="services">
    <h1 class="services__heading">
        {{ __('Услуги компании «Малые этажи»') }}
    </h1>
    <div class="services__wrapper">
        <div class="services-see">
            <h3 class="services-see__heading">
                {{ __('Посмотрите что мы можем еще') }}
            </h3>
            <p class="services-see__paraf">
                {{ __('Для того, чтобы посмотреть полный список услуг, перейдите к разделу.') }}</p>
            <a href="/about/#all-services" class="default__button services-see__button">{{ __('К разделу') }}</a>
        </div>
        <div class="swiper services-swiper">
            <div class="swiper-wrapper services-wrapper">
                @foreach ($service as $item)
                <div class="swiper-slide services-slide">
                    <div class="services__inner">
                        <img class="services-slide__img" src="{{ $item['icon'] }}" alt="services">
                        <div class="services-slide__info">
                            <p class="services-slide__heading">{{ $item['title'] }}</p>
                            <p class="services-slide__text">
                                {{$item['text']}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="swiper-button-prev services-button-prev">
                <img class="services-prev" src="{{ Vite::asset('resources/images/swiper/serv.svg') }}" alt="prev">
            </div>
            <div class="swiper-button-next services-button-next">
                <img class="services-next" src="{{ Vite::asset('resources/images/swiper/serv.svg') }}" alt="next">
            </div>
        </div>
    </div>
</section>

<x-section.feedback>
</x-section.feedback>

<x-section.trusted>
</x-section.trusted>



<section class="home-projects">
    <div class="home-projects__header">
        <h1 class="home-projects__heading">{{ __('Наши проекты') }}</h1>
        <a class="default__button home-projects__link" href="projects">
            {{__('Все проекты')}}
        </a>
    </div>
    <div class="home-projects__wrapper">
        @php
        $output = array_slice(HousesInfo::$card_elements->toArray(), 0, 3);
        @endphp

        @foreach ($output as $key => $item)
        <x-cards.project-item info="{!! json_encode($item) !!}">
        </x-cards.project-item>
        @endforeach

    </div>
</section>
@endsection