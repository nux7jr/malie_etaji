<section class="heading-info">
    <div class="header-select__wrapper">
        <button title="{{ __('Выбор города')}}" class="heading-info__button geo__button">
            <img class="geo__img" src="{{ Vite::asset('resources/images/icons/geo.svg')}}" alt="{{ __('Красноярск') }}">
            {{ __('Красноярск') }}
            <img class="geo__img" src="{{ Vite::asset('resources/images/icons/geo_arr.svg')}}" alt="{{ __('Красноярск') }}">
        </button>
        <div class="user__option">
            <button class="heading-info__button search">
                <img class="search__img" src="{{ Vite::asset('resources/images/icons/search.svg')}}" alt="{{ __('Поиск') }}">
                {{ __('Поиск') }}
            </button>
            <button class="heading-info__button login">
                <img src="{{ Vite::asset('resources/images/icons/person.svg')}}" alt="{{ __('Войти') }}">
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
                    <img src="images/icons/back.svg" alt="back">
                </button>
                <a title="{{ __('Все проекты') }}" class="header__button header__link" href="/projects">
                    {{ __('Все проекты') }}
                </a>
                <a title="{{ __('Одноэтажные') }}" class="header__button header__link" href="/single">
                    {{ __('Одноэтажные') }}
                </a>
                <a title="{{ __('Двухэтажные') }}" class="header__button header__link" href="/double">
                    {{ __('Двухэтажные') }}
                </a>
                <a title="{{ __('Барны') }}" class="header__button header__link" href="/barns">
                    {{ __('Барны') }}
                </a>
                <a title="{{ __('Конструктор дома') }}" class="header__button header__link" href="/constructor">
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
                    <img src="images/icons/back.svg" alt="back">
                </button>
                <a title="{{ __('Семейная ипотека') }}" class="header__button header__link" href="/family">
                    {{ __('Семейная ипотека') }}
                </a>
                <a title="{{ __('Материнский капитал') }}" class="header__button header__link" href="/single">
                    {{ __('Материнский капитал') }}
                </a>
                <a title="{{ __('Ипотека траншами') }}" class="header__button header__link" href="/double">
                    {{ __('Ипотека траншами') }}
                </a>
                <a title="{{ __('Рассрочка') }}" class="header__button header__link" href="/barns">
                    {{ __('Рассрочка') }}
                </a>
                <a title="{{ __('Военная ипотека') }}" class="header__button header__link" href="/constructor">
                    {{ __('Военная ипотека') }}
                </a>
                <a title="{{ __('Субсидии') }}" class="header__button header__link" href="/ecs">
                    {{ __('Субсидии') }}
                </a>
                <a title="{{ __('Trade-in') }}" class="header__button header__link" href="/live">
                    {{ __('Trade-in') }}
                    {{-- img! --}}
                </a>
            </div>
            <div class="header__links">
                <a role="link" href="#" title="{{ __('Посмотреть все проекты') }}" class="header__button header__link submenu">
                    {{ __('Проекты') }}
                </a>
                <a role="link" href="#" title="{{ __('Виды ипотеки') }}" class="header__button header__link submenu">
                    {{ __('Ипотека') }}
                </a>
                <a title="{{ __('Инвестиции') }}" class="header__button header__link" href="/invest">
                    {{ __('Инвестиции') }}
                </a>
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
                    <img class="call__img" src="{{ Vite::asset('resources/images/icons/call.svg')}}" alt=" {{ __('Заказать звонок') }}">
                    {{ __('Заказать звонок') }}
                </button>
                <a class="header__button phone__link" href="tel:+7 (900) 999-99-99">+7 (900) 999-99-99</a>
            </div>
        </nav>
    </div>
</header>
