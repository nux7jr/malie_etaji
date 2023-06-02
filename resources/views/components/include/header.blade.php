<section class="heading-info">
    <div class="header-select__wrapper">
        <button title="{{ __('Выбор города') }}" class="heading-info__button geo__button">
            <img class="geo__img" src="{{ Vite::asset('resources/images/icons/geo.svg') }}"
                alt="{{ __('Красноярск') }}">
            {{ __('Красноярск') }}
            <img class="geo__img" src="{{ Vite::asset('resources/images/icons/geo_arr.svg') }}"
                alt="{{ __('Красноярск') }}">
        </button>
        <div class="user__option">
            <button class="heading-info__button search">
                <img class="search__img" src="{{ Vite::asset('resources/images/icons/search.svg') }}"
                    alt="{{ __('Поиск') }}">
                {{ __('Поиск') }}
            </button>
            <button class="heading-info__button login">
                <img src="{{ Vite::asset('resources/images/icons/person.svg') }}" alt="{{ __('Войти') }}">
                {{ __('Войти') }}
            </button>
        </div>
    </div>
</section>
<header>
    {{-- @php
    dd($path);
    @endphp --}}
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
                <a title="{{ __('Экскурсия по объектам') }}" class="header__button header__link" href="/ecs">
                    {{ __('Экскурсия по объектам') }}
                </a>
                <a title="{{ __('Live') }}" class="header__button header__link" href="/live">
                    {{ __('Live') }}
                    {{-- img! --}}
                </a>
            </div>
            <div class="header__submenu header__submenu--second">
                <button class="header__goback">
                    <img src="{{ Vite::asset('resources/images/icons/back.svg') }}" alt="back">
                </button>
                <a title="{{ __('Семейная ипотека') }}" class="header__button header__link"
                    href="/mortgage/family/#mortgage-programs">
                    {{ __('Семейная ипотека') }}
                </a>
                <a title="{{ __('Материнский капитал') }}" class="header__button header__link"
                    href="/mortgage/capital/#mortgage-programs">
                    {{ __('Материнский капитал') }}
                </a>
                <a title="{{ __('Ипотека траншами') }}" class="header__button header__link"
                    href="/mortgage/tranches/#mortgage-programs">
                    {{ __('Ипотека траншами') }}
                </a>
                <a title="{{ __('Рассрочка') }}" class="header__button header__link"
                    href="/mortgage/installment/#mortgage-programs">
                    {{ __('Рассрочка') }}
                </a>
                <a title="{{ __('Военная ипотека') }}" class="header__button header__link"
                    href="/mortgage/military/#mortgage-programs">
                    {{ __('Военная ипотека') }}
                </a>
                <a title="{{ __('Субсидии') }}" class="header__button header__link"
                    href="/mortgage/subsidies/#mortgage-programs">
                    {{ __('Субсидии') }}
                </a>
                <a title="{{ __('Trade-in') }}" class="header__button header__link"
                    href="/mortgage/trade/#mortgage-programs">
                    {{ __('Trade-in') }}
                    {{-- img! --}}
                </a>
            </div>
            <div class="header__links">
                <button data-menu="first" title="{{ __('Посмотреть все проекты') }}"
                    class="header__button header__link submenu">
                    {{ __('Проекты') }}
                </button>
                <button data-menu="second" title="{{ __('Виды ипотеки') }}" class="header__button header__link submenu">
                    {{ __('Ипотека') }}
                </button>
                {{-- <a title="{{ __('Инвестиции') }}" class="header__button header__link" href="/invest">
                    {{ __('Инвестиции') }}
                </a> --}}
                <a title="{{ __('Риэлтору') }}" class="header__button header__link" href="/realtors">
                    {{ __('Риэлтору') }}
                </a>
                <a title="{{ __('О нас') }}" class="header__button header__link" href="/about">
                    {{ __('О нас') }}
                </a>
                <a title="{{ __('Карьера') }}" class="header__button header__link" href="/career">
                    {{ __('Карьера') }}
                </a>
                <a title="{{ __('Блог') }}" class="header__button header__link" href="/blog">
                    {{ __('Блог') }}
                </a>
                <a title="{{ __('Контакты') }}" class="header__button header__link" href="/contacts">
                    {{ __('Контакты') }}
                </a>
            </div>
            <div class="header__call">
                <button class="header__button call__button">
                    <img class="call__img" src="{{ Vite::asset('resources/images/icons/call.svg') }}"
                        alt=" {{ __('Заказать звонок') }}">
                    {{ __('Заказать звонок') }}
                </button>
                <a class="header__button phone__link" href="tel:+7 (900) 999-99-99">+7 (900) 999-99-99</a>
            </div>
        </nav>
    </div>
</header>