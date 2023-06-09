@php $city = json_decode($city,true);@endphp
<section class="heading-info">
    <div class="header-select__wrapper">
        <div class="geo-header">
            <button title="{{ __('Выбор города') }}" class="heading-info__button geo__button">
                <img class="geo__img" src="{{ Vite::asset('resources/images/icons/geo.svg') }}"
                    alt="{{ __($city['show']['name']) }}">
                {{ __($city['show']['name']) }}
                <img class="geo__img" src="{{ Vite::asset('resources/images/icons/geo_arr.svg') }}"
                    alt="{{ __($city['show']['name']) }}">
            </button>
            <div class="hidden-city">
                @foreach($city['hidden'] as $hidden_city)
                @php
                if (($subdomain = request()->route()->parameter('subdomain')) !== null){
                $host = request()->host();
                $new_host = str_replace($subdomain,$hidden_city['code'],$host);
                $url = str_replace($host,$new_host,request()->fullUrl());
                }else{
                $host = request()->host();
                $new_host = $hidden_city['code'] . '.' . request()->host();
                $url = str_replace($host,$new_host,request()->fullUrl());
                }
                @endphp
                <a class="hidden-city__link" href="{{$url}}">{{__($hidden_city['name'])}}</a>
                @endforeach
            </div>
        </div>
        <div class="user__option">
            {{-- <button class="heading-info__button search" data-modal_id="modal__search">
                <img class="search__img" src="{{ Vite::asset('resources/images/icons/search.svg') }}"
                    alt="{{ __('Поиск') }}">
                {{ __('Поиск') }}
            </button> --}}
            <button class="heading-info__button login">
                <img src="{{ Vite::asset('resources/images/icons/person.svg') }}" alt="{{ __('Войти') }}">
                {{ __('Войти') }}
            </button>
        </div>
    </div>
</section>
<header>
    <div class="header__wrapper">
        <nav class="header__item navigation">
            <a class="header__button header__link header__logo" href="/">
                <img src="{{ Vite::asset('resources/images/logos/logo.svg') }}" alt="logo">
            </a>
            <div class="header__submenu header__submenu--first">
                <button class="header__goback">
                    <img src="{{ Vite::asset('resources/images/icons/back.svg') }}" alt="back">
                </button>
                <a title="{{ __('Все проекты') }}" class="header__button header__link" href="/projects">
                    {{ __('Все проекты') }}
                </a>
                <a title="{{ __('Одноэтажные') }}" class="header__button header__link" href="/projects/single">
                    {{ __('Одноэтажные') }}
                </a>
                <a title="{{ __('Двухэтажные') }}" class="header__button header__link" href="/projects/double">
                    {{ __('Двухэтажные') }}
                </a>
                <a title="{{ __('Барны') }}" class="header__button header__link" href="/projects/barn">
                    {{ __('Барны') }}
                </a>
                <a title="{{ __('Конструктор дома') }}" class="header__button header__link"
                    href="/projects/#constructor">
                    {{ __('Конструктор дома') }}
                </a>
                {{-- <a title="{{ __('Экскурсия по объектам') }}" class="header__button header__link" href="/ecs">
                    {{ __('Экскурсия по объектам') }}
                </a> --}}
                {{-- <a title="{{ __('Live') }}" class="header__button header__link live__link" href="/live">
                    {{ __('Live') }}
                </a> --}}
            </div>
            <div class="header__submenu header__submenu--second">
                <button class="header__goback">
                    <img src="{{ Vite::asset('resources/images/icons/back.svg') }}" alt="back">
                </button>
                <a title="{{ __('Семейная ипотека') }}" class="header__button header__link"
                    href="/mortgage/family/#mortgage-programs">
                    {{ __('Семейная ипотека') }}
                </a>
                <a title="{{ __('Господдержка') }}" class="header__button header__link"
                    href="/mortgage/gos/#mortgage-programs">
                    {{ __('Господдержка') }}
                </a>
                <a title="{{ __('IT-ипотека') }}" class="header__button header__link"
                    href="/mortgage/it/#mortgage-programs">
                    {{ __('IT-ипотека') }}
                </a>
                <a title="{{ __('Дальневосточная') }}" class="header__button header__link"
                    href="/mortgage/away/#mortgage-programs">
                    {{ __('Дальневосточная') }}
                </a>
                <a title="{{ __('Сельская') }}" class="header__button header__link"
                    href="/mortgage/village/#mortgage-programs">
                    {{ __('Сельская') }}
                </a>
            </div>
            <div class="header__links">
                <a title="{{ __('Главная') }}" class="header__button header__link" href="/">
                    {{ __('Главная') }}
                </a>
                <button data-menu="first" title="{{ __('Посмотреть все проекты') }}"
                    class="header__button header__link submenu">
                    {{ __('Проекты') }}
                </button>
                <button data-menu="second" title="{{ __('Виды ипотеки') }}" class="header__button header__link submenu">
                    {{ __('Ипотека') }}
                </button>
                {{-- <a title="{{ __('Инвестиции') }}" class="header__button header__link" href="/invest">
                    {{ __('Инвестиции') }}
                </a>
                <a title="{{ __('Риэлтору') }}" class="header__button header__link" href="/realtors">
                    {{ __('Риэлтору') }}
                </a> --}}
                <a title="{{ __('О нас') }}" class="header__button header__link" href="/about">
                    {{ __('О нас') }}
                </a>
                <a title="{{ __('Карьера') }}" class="header__button header__link" target="_blank"
                    href="https://krasnoyarsk.hh.ru/employer/895977">
                    {{ __('Карьера') }}
                </a>
                {{-- <a title="{{ __('Блог') }}" class="header__button header__link" href="/blog">
                    {{ __('Блог') }}
                </a> --}}
                <a title="{{ __('Контакты') }}" class="header__button header__link" href="/contacts">
                    {{ __('Контакты') }}
                </a>
            </div>
            <div class="header__call">
                <button data-modal_id='modal__income' data-ym="call_zakaz" class="header__button call__button">
                    <img class="call__img" src="{{ Vite::asset('resources/images/icons/call.svg') }}"
                        alt=" {{ __('Заказать звонок') }}">
                    {{ __('Заказать звонок') }}
                </button>
                <a class="header__button phone__link" onclick='ym(67008322, "reachGoal", "leads")'
                    href="tel:++7 (391) 205-3-444">+7 (391) 205-3-444</a>
            </div>
        </nav>
    </div>
</header>