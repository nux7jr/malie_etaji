@push('head')
@once
@vite('resources/css/components/constructor.css')
@vite('resources/js/components/constructor.js')
@endonce
@endpush


<section class="constructor" id="constructor">
    <form class="constructor__form" id='constructor__form'>
        <h1 class="constructor__heading">
            {{ __('Конструктор дома') }}
        </h1>
        <div class="constructor__wrapper first_slide">
            <div class="constructor-inner">
                <h2 class="constructor-inner__heading">
                    {{ __('Шаг 1 из 2') }}
                </h2>
                <div class="ganeral-select house-type">
                    <h2 class="ganeral-header">
                        {{ __('Выберите тип дома') }}
                    </h2>
                    <div class="ganeral-wrapper house-type__wrapper">
                        <div class="ganeral-item house-type__item">
                            <input id="single1" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house_type" value="Одноэтажный" checked />
                            <label class="house-filter ganeral-lablel house-type__label full__lablel" for="single1">
                                {{ __('Одноэтажный') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="double1" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house_type" value="Двухэтажный" />
                            <label class="house-filter ganeral-lablel house-type__label" for="double1">
                                {{ __('Двухэтажный') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="barn1" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house_type" value="Барнхаус" />
                            <label class="house-filter ganeral-lablel house-type__label" for="barn1">
                                {{ __('Барнхаус') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="ganeral-select house-type">
                    <h2 class="ganeral-header">
                        {{ __('Выберите размер дома') }}

                    </h2>
                    <div class="ganeral-wrapper house-type__wrapper">
                        <div class="ganeral-item house-type__item">
                            <input id="size1" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house_size" value="100" />
                            <label class="house-filter ganeral-lablel house-type__label" for="size1">
                                {{ __('До 100 м2') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="size2" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house_size" value="100-150" checked />
                            <label class="house-filter ganeral-lablel house-type__label" for="size2">
                                {{ __('100-150 м2') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="size3" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house_size" value="150+" />
                            <label class="house-filter ganeral-lablel house-type__label" for="size3">
                                {{ __('Более 150 м2') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="ganeral-select house-type">
                    <h2 class="ganeral-header">
                        {{ __('Выберите стоимость') }}
                    </h2>
                    <div class="ganeral-wrapper house-type__wrapper">
                        <div class="ganeral-item house-type__item">
                            <input checked id="price1" class="ganeral-input house-type__input visually-hidden"
                                type="radio" name="house_price" value="2-5" checked />
                            <label class="house-filter ganeral-lablel house-type__label" for="price1">
                                {{ __('От 2 млн до 5 млн') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="price2" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house_price" value="5-8" />
                            <label class="house-filter ganeral-lablel house-type__label" for="price2">
                                {{ __('От 5 млн до 8 млн') }}
                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="price3" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house_price" value="8+" />
                            <label class="house-filter ganeral-lablel house-type__label" for="price3">
                                {{ __('От 8 млн') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="constructor-inner__option">
                    <button type="button" class="constructor__button not-back" disabled>
                        <img src="{{ Vite::asset('resources/images/components/button.svg') }}" alt="button">
                    </button>
                    <button type="button" class="default__button constructor__next">
                        {{ __('Перейти дальше') }}
                    </button>
                </div>
            </div>
            <div class="constructor-preview prew"
                style="background-image: url({{ Vite::asset('resources/images/single/83-109/1-main.jpg') }})">
                <div class="constructor-preview__info">
                    <div class="constructor-preview__item">
                        <p class="constructor-preview__paraf">
                            {{ __('80 м2') }}</p>
                        <p class="constructor-preview__text">
                            {{ __('Площадь дома') }}</p>
                    </div>
                    <div class="constructor-preview__item">
                        <p class="constructor-preview__paraf">
                            {{ __('2') }}</p>
                        <p class="constructor-preview__text">
                            {{ __('Кол-во этажей') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="constructor__wrapper second_slide">
            <div class="constructor-inner">
                <h2 class="constructor-inner__heading">
                    {{ __('Шаг 2 из 2') }}
                </h2>
                <div class="ganeral-select house-type">
                    <h2 class="ganeral-header">
                        {{ __('Выберите срок начала строительства') }}
                    </h2>
                    <div class="ganeral-wrapper house-type__wrapper">
                        <div class="ganeral-item house-type__item">
                            <input id="date1" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house-date" value="В ближайшее 3 месяца" checked />
                            <label class="ganeral-lablel house-type__label ganeral__date" for="date">
                                {{ __('В ближайшее 3 месяца') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="date2" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house-date" value="Через 3-6 месяцев" />
                            <label class="ganeral-lablel house-type__label" for="date2">
                                {{ __('Через 3-6 месяцев') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="date3" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house-date" value="Более 6 месяцев" />
                            <label class="ganeral-lablel house-type__label" for="date3">
                                {{ __('Более 6 месяцев') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="ganeral-select house-type">
                    <h2 class="ganeral-header">
                        {{ __('Наличие участка для строительства') }}


                    </h2>
                    <div class="ganeral-wrapper house-type__wrapper">
                        <div class="ganeral-item house-type__item">
                            <input id="place1" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house-place" value="Да" />
                            <label class="ganeral-lablel house-type__label" for="place1">
                                {{ __('Да') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="place2" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house-place" value="Нет" checked />
                            <label class="ganeral-lablel house-type__label" for="place2">
                                {{ __('Нет') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="place3" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house-place" value="Необходим подбор" />
                            <label class="ganeral-lablel house-type__label" for="place3">
                                {{ __('Необходим подбор') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="ganeral-select house-type">
                    <h2 class="ganeral-header">
                        {{ __('Актуальность ипотеки или кредита') }}
                    </h2>
                    <div class="ganeral-wrapper house-type__wrapper">
                        <div class="ganeral-item house-type__item">
                            <input checked id="credit1" class="ganeral-input house-type__input visually-hidden"
                                type="radio" name="house-credit" value="Да" checked />
                            <label class="ganeral-lablel house-type__label" for="credit1">
                                {{ __('Да') }}

                            </label>
                        </div>
                        <div class="ganeral-item house-type__item">
                            <input id="credit2" class="ganeral-input house-type__input visually-hidden" type="radio"
                                name="house-credit" value="Нет" />
                            <label class="ganeral-lablel house-type__label" for="credit2">
                                {{ __('Нет') }}

                            </label>
                        </div>

                    </div>
                </div>
                <div class="constructor-inner__option">
                    <button type="button" class="constructor__button real-back">
                        <img src="{{ Vite::asset('resources/images/components/button.svg') }}" alt="button">
                    </button>
                    <button subject="Конструктор дома" type="button" data-additional_form='constructor__form' class="default__button constructor__next" data-ym="konstruktor"
                        data-modal_id="modal__cell">
                        {{ __('Завершить') }}
                    </button>
                </div>
            </div>
            <div class="constructor-preview prew"
                style="background-image: url({{ Vite::asset('resources/images/single/83-109/1-main.jpg') }})">
                <div class="constructor-preview__info">
                    <div class="constructor-preview__item">
                        <p class="constructor-preview__paraf preview__sq">
                            {{ __('80 м2') }}</p>
                        <p class="constructor-preview__text">
                            {{ __('Площадь дома') }}</p>
                    </div>
                    <div class="constructor-preview__item">
                        <p class="constructor-preview__paraf preview__fl">
                            {{ __('2') }}</p>
                        <p class="constructor-preview__text">
                            {{ __('Кол-во этажей') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="constructor-call">
        <a href="/mortgage" class="constructor-call__button">
            <span class="constructor-call__text">
                {{ __('Онлайн заявка на ипотеку') }}

            </span>
            <img class="constructor-call__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                alt="Онлайн заявка на ипотеку" />
        </a>
        <button data-modal_id="modal__income" data-ym="podbor_uchastka" class="constructor-call__button">
            <span data-modal_id="modal__income" data-ym="podbor_uchastka" class="constructor-call__text">
                {{ __('Помощь в подборе участка') }}
            </span>
            <img data-modal_id="modal__income" data-ym="podbor_uchastka" class="constructor-call__img"
                src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="Онлайн заявка на ипотеку" />
        </button>
    </div>
</section>