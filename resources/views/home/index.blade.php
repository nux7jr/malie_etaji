@extends ("layouts.base")

@section('head')
    @vite('resources/js/pages/home/home.js')
    @vite('resources/css/pages/home/home.css')
@endsection

@section('content')
    <section class="offer">
        <div class="main-offer offer-swiper swiper">
            <div class="offer-wrapper swiper-wrapper">
                <div class="offer-slide swiper-slide" style="background-image: url(https://placehold.co/600x400)">
                    <div class="offer-slider__inner">
                        <h1 class="main-offer__heading">{{ __('Оффер') }}</h1>
                        <p class="main-offer__paraf">
                            {{ __('Lorem Ipsum является стандартной "рыбой" для текстов
                                                        на латинице с начала XVI века. В то время некий
                                                        безымянный печатник создал большую коллекцию размеров
                                                        и форм шрифтов.') }}
                        </p>
                        <button class="default__button main-offer__button">{{ __('Узнать больше') }}</button>
                    </div>
                </div>
                <div class="offer-slide swiper-slide" style="background-image: url(https://placehold.co/700x300)">
                    <div class="offer-slider__inner">
                        <h1 class="main-offer__heading">{{ __('Оффер') }}</h1>
                        <p class="main-offer__paraf">
                            {{ __('Lorem Ipsum является стандартной "рыбой" для текстов
                                                        на латинице с начала XVI века. В то время некий
                                                        безымянный печатник создал большую коллекцию размеров
                                                        и форм шрифтов.') }}
                        </p>
                        <button class="default__button main-offer__button">{{ __('Узнать больше') }}</button>
                    </div>
                </div>
                <div class="offer-slide swiper-slide" style="background-image: url(https://placehold.co/1000x800)">
                    <div class="offer-slider__inner">
                        <h1 class="main-offer__heading">{{ __('Оффер') }}</h1>
                        <p class="main-offer__paraf">
                            {{ __('Lorem Ipsum является стандартной "рыбой" для текстов
                                                        на латинице с начала XVI века. В то время некий
                                                        безымянный печатник создал большую коллекцию размеров
                                                        и форм шрифтов.') }}
                        </p>
                        <button class="default__button main-offer__button">{{ __('Узнать больше') }}</button>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination offer-slide__pagination"></div>
        </div>
        <div class="offer__wrapper">
            <div class="sec-offer">
                <h1 class="sec-offer__heading">{{ __('Оффер') }}</h1>
                <p class="sec-offer__paraf">
                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
                </p>
                <button class="sec-offer__button">
                    <img class="sec-offer__img" src="{{ Vite::asset('resources/images/icons/offer_arr.svg') }}"
                        alt="offer">
                </button>
            </div>
            <div class="sec-offer">
                <h1 class="sec-offer__heading">{{ __('Оффер') }}</h1>
                <p class="sec-offer__paraf">
                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
                </p>
                <button class="sec-offer__button">
                    <img class="sec-offer__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                        alt="offer">
                </button>
            </div>
        </div>
    </section>
    <section class="which-house">
        <h1 class="which-house__heading">
            {{ __('Какие дома мы строим') }}
        </h1>

        <div class="which-house__wrapper">
            @for ($i = 0; $i < 6; $i++)
                <x-ui.cards.autoplay>
                </x-ui.cards.autoplay>
            @endfor
        </div>
    </section>
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
                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.') }}</p>
                <button class="default__button services-see__button">{{ __('К разделу') }}</button>
            </div>
            <div class="swiper services-swiper">
                <div class="swiper-wrapper services-wrapper">
                    <div class="swiper-slide services-slide">
                        <div class="services__inner">
                            <img class="services-slide__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}"
                                alt="services">
                            <div class="services-slide__info">
                                <p class="services-slide__heading">{{ __('Подбор котлов отопления') }}</p>
                                <p class="services-slide__text">
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide services-slide">
                        <div class="services__inner">
                            <img class="services-slide__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}"
                                alt="services">
                            <div class="services-slide__info">
                                <p class="services-slide__heading">{{ __('Подбор котлов отопления') }}</p>
                                <p class="services-slide__text">
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide services-slide">
                        <div class="services__inner">
                            <img class="services-slide__img" src="{{ Vite::asset('resources/images/icons/fire.svg') }}"
                                alt="services">
                            <div class="services-slide__info">
                                <p class="services-slide__heading">{{ __('Подбор котлов отопления') }}</p>
                                <p class="services-slide__text">
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.') }}
                                </p>
                            </div>
                        </div>
                    </div>
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
    <section class="why-us">
        <div class="why-us__wrapper">
            <div class="why-us__info">
                <h1 class="why-us__heading">
                    {{ __('Почему “Малые этажи” стабильная компания?') }}
                </h1>
                <p class="why-us__paraf">
                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
                </p>
            </div>
            <div class="why-us__card-wrapper">
                @for ($i = 0; $i < 4; $i++)
                    <div class="why-us__card">
                        <h3 class="why-us__header">
                            <span class="why-us__title">
                                {{ __('20') }}
                            </span>
                            <span class="why-us__subtitle">
                                {{ __('построенных домов') }}
                            </span>
                        </h3>
                        <p class="why_us__text">
                            {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
                        </p>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section class="build">
        <div class="build__wrapper">
            <div class="build__header">
                <h1 class="build__heading">
                    {{ __('Дома, которые мы постоили') }}
                </h1>
                <p class="build__paraf">
                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
                </p>
            </div>
            <div class="build__option">
                <button class="default__button build__button build__button--active"
                    data-filter="all">{{ __('Все') }}</button>
                <button class="default__button build__button" data-filter="single">{{ __('Одноэтажные') }}</button>
                <button class="default__button build__button" data-filter="double">{{ __('Двухэтажные') }}</button>
                <button class="default__button build__button" data-filter="barn">{{ __('Барны') }}</button>
            </div>
            <div class="swiper build-swiper">
                <div class="swiper-wrapper build-wrapper">
                    <div class="swiper-slide build-slide single">
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
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
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
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
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
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
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
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
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
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
                                </p>
                                <div class="inner-time">
                                    <div class="inner-time__item">
                                        <p class="inner-time__paraf">{{ __('80') }} <span
                                                class="inner-time__text">{{ __('м2') }}</span></p>
                                        <p class="inner-time-info">
                                            {{ __('Площадь дома') }}

                                        </p>
                                    </div>
                                    <div class="inner-time__item">
                                        <p class="inner-time__paraf">{{ __('80') }} <span
                                                class="inner-time__text">{{ __('м2') }}</span></p>
                                        <p class="inner-time-info">
                                            {{ __('Площадь дома') }}

                                        </p>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    <p class="inner-price__value">{{ __('15 667 789') }} <span
                                            class="inner-price__text">{{ __('рублей') }}</span>
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
                                    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
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
                    </div>
                </div>
                <div class="build-wrapper__navigation">
                    <div class="build-wrapper__option">
                        <div class="swiper-button-next build-button-next"></div>
                        <div class="swiper-button-prev build-button-prev"></div>
                    </div>
                    <div class="swiper-pagination build__pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <x-section.tech>
    </x-section.tech>
    <section class="stage">
        <h1 class="stage__heading">
            {{ __('Карта этапов строительства дома') }}
        </h1>
        <div class="stage__wrapper">
            <div class="stage-pagination"></div>
            <div class="swiper stage-swiper">
                <div class="swiper-wrapper stage-wrapper">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="swiper-slide stage-slide">
                            <div class="stage-inner">
                                <div class="stage-right" style="background-image: url('https://placehold.co/650x530')">
                                </div>
                                <div class="stage-left">
                                    <p class="stage-slide__index">
                                        {{ __('1 этап') }}
                                    </p>
                                    <h2 class="stage-slide__heading">
                                        {{ __('Согласование предварительных вопросов') }}
                                    </h2>
                                    <div class="stage-slide__wrapper">
                                        <ul class="stage-slide__list">
                                            <p class="stage-slide__ul-heading">
                                                {{ __('Что входит в 1-й этап:') }}
                                            </p>
                                            <li class="stage-slide__li">
                                                {{ __('Консультация по выбору материала строительства;') }}
                                            </li>
                                            <li class="stage-slide__li">
                                                {{ __('Подбор проекта дома при необходимости;') }}
                                            </li>
                                            <li class="stage-slide__li">
                                                {{ __('Предварительный расчет строительства.') }}
                                            </li>
                                        </ul>
                                        <p class="stage-slide__paraf">
                                            {{ __('Первый этап помогает вам узнать преимущества работы с нами и ни к чему вас не обязывает') }}
                                        </p>
                                    </div>
                                    <div class="stage-option">
                                        <div class="stage-button-prev">
                                            <img class="stage-option__img stage-option__img-back"
                                                src="{{ Vite::asset('resources/images/swiper/next.svg') }}"
                                                alt="icon">
                                        </div>
                                        <div class="stage-button-next">
                                            <img class="stage-option__img"
                                                src="{{ Vite::asset('resources/images/swiper/next.svg') }}"
                                                alt="icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
    </section>
    <section class="spec">
        <div class="spec__header">
            <h1 class="spec__heading">
                {{ __('Каждые этапы работ выполняют отдельные специалисты') }}
            </h1>
            <p class="spec__small">
                {{ __('А не мастер на все руки') }}
            </p>
            <div class="spec-pagination"></div>
        </div>
        <div class="swiper spec-swiper">
            <div class="swiper-wrapper spec-wrapper">
                @for ($i = 0; $i < 10; $i++)
                    <div class="swiper-slide spec-slide">
                        <div class="spec__inner">
                            <img class="spec__img" src="https://placehold.co/255x300" alt="logo">
                            <p class="spec__name">
                                {{ __('Имя Фамилия') }}</p>
                            <p class="spec__profile">
                                {{ __('Специалист') }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="spec__option">
            <div class="spec-button spec-button-prev">
                <img class="spec-option__img" src="{{ Vite::asset('resources/images/swiper/next.svg') }}"
                    alt="icon">
            </div>
            <div class="spec-button spec-button-next">
                <img class="spec-option__img" src="{{ Vite::asset('resources/images/swiper/next.svg') }}"
                    alt="icon">
            </div>
        </div>
    </section>

    <x-section.constructor>
    </x-section.constructor>


    <section class="advantages">
        <h1 class="advantages__heading">
            {{ __('Наши преимущества') }}

        </h1>
        <div class="advantages__wrapper">
            @for ($i = 0; $i < 8; $i++)
                <div class="advantages-card">
                    <img class="advantages-card__img" src="{{ Vite::asset('resources/images/icons/pit.svg') }}"
                        alt="advantages">
                    <p class="advantages-card__paraf">
                        {{ __('Собственное современное производство SIP-панелей') }}

                    </p>
                </div>
            @endfor
        </div>
    </section>
    <x-section.order>
    </x-section.order>

    <x-section.feedback>
    </x-section.feedback>



    <section class="trusted">
        <h1 class="trusted__heading">
            {{ __('Нам доверяют') }}
        </h1>
        <p class="trusted__text">
            {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то
                                                                                                                                                                                    время некий безымянный
                                                                                                                                                                                    печатник создал большую коллекцию размеров и форм шрифтов.') }}
        </p>

        <div class="swiper trusted-swiper">

            <div class="swiper-wrapper trusted-wrapper">
                @for ($i = 0; $i < 10; $i++)
                    <div class="swiper-slide trusted-slide">
                        <img src="https://www.vogue.com/verso/static/vogue/assets/us/logo.svg" alt="logo">
                    </div>
                @endfor
            </div>

            <div class="swiper-pagination trusted-pagination"></div>
        </div>
    </section>

    <section class="home-projects">
        <div class="home-projects__header">
            <h1 class="home-projects__heading">{{ __('Наши проекты') }}</h1>
            <a class="default__button" href="projects">
                Все проекты
            </a>
        </div>
        <div class="home-projects__wrapper">
            @for ($i = 0; $i < 3; $i++)
                <x-cards.project-item>
                </x-cards.project-item>
            @endfor
        </div>
    </section>
@endsection
