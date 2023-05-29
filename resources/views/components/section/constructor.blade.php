@push('head')
@once
@vite('resources/css/components/constructor.css')
@endonce
@endpush


<section class="constructor" id="constructor">
    <h1 class="constructor__heading">
        {{ __('Конструктор дома') }}
    </h1>
    <div class="constructor__wrapper">
        <div class="constructor-inner">
            <h2 class="constructor-inner__heading">
                {{ __('Шаг 1 из 3') }}

            </h2>
            <div class="ganeral-select house-type">
                <h2 class="ganeral-header">
                    {{ __('Выберите тип дома') }}

                    <button class="tooltip">
                        <img class="toltip-button__img"
                            src="{{ Vite::asset('resources/images/components/toltip.svg') }}" alt="toltip">
                        <span class="tooltiptext">
                            {{ __(' Tooltip text') }}
                        </span>
                    </button>
                </h2>
                <div class="ganeral-wrapper house-type__wrapper">
                    <div class="ganeral-item house-type__item">
                        <input checked id="single" class="ganeral-input house-type__input visually-hidden" type="radio"
                            name="house-type" value="Одноэтажный" />
                        <label class="ganeral-lablel house-type__label" for="single">
                            {{ __('Одноэтажный') }}

                        </label>
                    </div>
                    <div class="ganeral-item house-type__item">
                        <input id="double" class="ganeral-input house-type__input visually-hidden" type="radio"
                            name="house-type" value="Двухэтажный" />
                        <label class="ganeral-lablel house-type__label" for="double">
                            {{ __('Двухэтажный') }}

                        </label>
                    </div>
                    <div class="ganeral-item house-type__item">
                        <input id="barn" class="ganeral-input house-type__input visually-hidden" type="radio"
                            name="house-type" value="Барнхаус" />
                        <label class="ganeral-lablel house-type__label" for="barn">
                            {{ __('Барнхаус') }}
                        </label>
                    </div>
                </div>
            </div>
            {{-- --}}
            <div class="ganeral-select">
                <h2 class="ganeral-header">
                    {{ __('Выберите размер дома') }}

                    <button class="tooltip">
                        <img class="toltip-button__img"
                            src="{{ Vite::asset('resources/images/components/toltip.svg') }}" alt="toltip">
                        <span class="tooltiptext">
                            {{ __('Tooltip text') }}
                        </span>
                    </button>
                </h2>
                <div class="ganeral-wrapper">
                    <div class="ganeral-item">
                        <input id="size-xs" class="ganeral-input visually-hidden" type="radio" name="size" value="XS" />
                        <label class="ganeral-lablel" for="size-xs">XS
                        </label>
                    </div>
                    <div class="ganeral-item ">
                        <input checked id="size-s" class="ganeral-input visually-hidden" type="radio" name="size"
                            value="S" />
                        <label class="ganeral-lablel" for="size-s">S
                        </label>
                    </div>
                    <div class="ganeral-item">
                        <input id="size-m" class="ganeral-input visually-hidden" type="radio" name="size" value="M" />
                        <label class="ganeral-lablel" for="size-m">M
                        </label>
                    </div>
                    <div class="ganeral-item">
                        <input id="size-l" class="ganeral-input visually-hidden" type="radio" name="size" value="L" />
                        <label class="ganeral-lablel" for="size-l">L
                        </label>
                    </div>
                    <div class="ganeral-item">
                        <input id="size-xl" class="ganeral-input visually-hidden" type="radio" name="size" value="XL" />
                        <label class="ganeral-lablel" for="size-xl">XL
                        </label>
                    </div>
                </div>
            </div>
            {{-- --}}
            <div class="ganeral-select">
                <h2 class="ganeral-header">
                    {{ __('Выберите планировку') }}

                    <button class="tooltip">
                        <img class="toltip-button__img"
                            src="{{ Vite::asset('resources/images/components/toltip.svg') }}" alt="toltip">
                        <span class="tooltiptext">
                            {{ __('Tooltip text') }}</span>
                    </button>
                </h2>
                <div class="ganeral-wrapper">
                    <div class="ganeral-item">
                        <input id="plan-free" class="ganeral-input visually-hidden" type="radio" name="plan"
                            value="Типовая" checked />
                        <label class="ganeral-lablel" for="plan-free">
                            {{ __('Типовая') }}
                        </label>
                    </div>
                    <div class="ganeral-item">
                        <input id="plan-project" class="ganeral-input visually-hidden" type="radio" name="plan"
                            value="С изменениями" />
                        <label class="ganeral-lablel" for="plan-project">
                            {{ __('С изменениями') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="constructor-inner__option">
                <button class="constructor__button">
                    <img src="{{ Vite::asset('resources/images/components/button.svg') }}" alt="button">
                </button>
                <button class="default__button constructor__next">
                    {{ __('Выберите фасад и кровлю') }}

                </button>
            </div>
        </div>
        <div class="constructor-preview">
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
    <div class="constructor-call">
        <button class="constructor-call__button">
            <span class="constructor-call__text">
                {{ __('Онлайн заявка на ипотеку') }}

            </span>
            <img class="constructor-call__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                alt="Онлайн заявка на ипотеку" />
        </button>
        <button class="constructor-call__button">
            <span class="constructor-call__text">
                {{ __('Помощь в подборе участка') }}

            </span>
            <img class="constructor-call__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                alt="Онлайн заявка на ипотеку" />
        </button>
    </div>
</section>