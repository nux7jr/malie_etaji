@push('head')
    @once
        @vite('resources/css/components/aboutHeader.css')
    @endonce
@endpush


<section class="about">
    <div class="about-slogan">
        <div class="about-slogan__wrapper">
            <h1 class="about-slogan__heading">{{ __('Заголовок') }}</h1>
            <p class="about-slogan__text">
                {{ __('СК «Малые Этажи» входит в группу компаний Tiksan Group — компания лидер в строительной и
                                                                                                          околостроительной
                                                                                                          сфере. Мы заинтересованы в создании шедевра — Вашей загородной мечты, от этапа проектирования до
                                                                                                          вручения
                                                                                                          ключей.') }}
            </p>
        </div>
        <div class="about-router">
            <div class="about-router__item">
                <a href="/maps" class="about-router__link">
                    <span>
                        {{ __('Карта построенных объектов') }}</span>
                    <img class="about-router__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                        alt="icon">
                </a>
            </div>
            <div class="about-router__item">
                <a href="/maps" class="about-router__link">
                    <span>
                        {{ __('Услуги, которые мы предоставляем') }}</span>
                    <img class="about-router__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                        alt="icon">
                </a>
            </div>
            <div class="about-router__item">
                <a href="/maps" class="about-router__link">
                    <span>
                        {{ __('Готовые объекты') }}
                    </span>
                    <img class="about-router__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                        alt="icon">
                </a>
            </div>
            <div class="about-router__item">
                <a href="/maps" class="about-router__link">
                    <span>
                        {{ __('Сертификаты и лицензии') }}</span>
                    <img class="about-router__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                        alt="icon">
                </a>
            </div>
        </div>
    </div>
    <img class="about-image" src="https://placehold.co/780x444" alt="house">
</section>
