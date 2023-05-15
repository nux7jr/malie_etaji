<section class="heading-info">
    <div class="header-select__wrapper">
        <button class="heading-info__button geo__button">
            <img class="geo__img" src="images/icons/geo.svg" alt="{{ __('Красноярск') }}">
            {{ __('Красноярск') }}
            <img class="geo__img" src="images/icons/geo_arr.svg" alt="{{ __('Красноярск') }}">
        </button>
        <div class="user__option">
            <button class="heading-info__button search">
                <img class="search__img" src="images/icons/search.svg" alt="{{ __('Поиск') }}">
                {{ __('Поиск') }}
            </button>
            <button class="heading-info__button login">
                <img src="images/icons/person.svg" alt="{{ __('Войти') }}">
                {{ __('Войти') }}
            </button>
        </div>
    </div>
</section>
<header>
    <div class="header__wrapper">
        <nav class="header__item navigation">
            <a class="header__button header__link header__logo" href="/">
                <img src="images/logos/logo.svg" alt="logo">
            </a>
            <div class="header__links">
                <a class="header__button header__link" href="/projects">
                    {{ __('Проекты') }}
                </a>
                <a class="header__button header__link" href="/mortgage">
                    {{ __('Ипотека') }}
                </a>
                <a class="header__button header__link" href="/invest">
                    {{ __('Инвестиции') }}
                </a>
                <a class="header__button header__link" href="/realtors">
                    {{ __('Риэлтору') }}
                </a>
                <a class="header__button header__link" href="/about">
                    {{ __('О нас') }}
                </a>
                <a class="header__button header__link" href="/career">
                    {{ __('Карьера') }}
                </a>
                <a class="header__button header__link" href="/blog">
                    {{ __('Блог') }}
                </a>
                <a class="header__button header__link" href="/contacts">
                    {{ __('Контакты') }}
                </a>
            </div>
            <div class="header__call">
                <button class="header__button call__button">
                    <img class="call__img" src="images/icons/call.svg" alt=" {{ __('Заказать звонок') }}">
                    {{ __('Заказать звонок') }}
                </button>
                <a class="header__button phone__link" href="tel:+7 (900) 999-99-99">+7 (900) 999-99-99</a>
            </div>
        </nav>
    </div>
</header>
