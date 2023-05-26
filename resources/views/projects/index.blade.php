@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/projects/projects.js')
@vite('resources/css/pages/projects/projects.css')
@endsection

@section('content')
<section class="filters">
    <x-ui.path.path class="filters-path" paths="{!! json_encode($paths) !!}">
    </x-ui.path.path>
    <form class="filter__form">
        <div class="project-filter">
            <h1 class="project-filter__heading">Выбрать дом</h1>
            <div class="project-filter__wrapper">
                <div class="project-input project-filter__item">
                    <label for="house-list" class="project-input__label">Линейка домов</label>
                    <x-ui.lists.dropdown class="house-list__dropdown" id="house-list" name="house-list">
                        <?php
                $house_setting = [
                    'Не выбрано',
                    'Все',
                    'Дом 2',
                    'Дом 3',
                    'Дом 4',
                    'Дом 4',
                    'Дом 4',];
                ?>
                        @foreach($house_setting as $option)
                        <x-ui.lists.option value="{{$option}}">
                            {{$option}}
                        </x-ui.lists.option>
                        @endforeach
                    </x-ui.lists.dropdown>
                </div>
                {{-- price --}}
                <div class="project-input project-input__price">
                    <p class="project-input__label project-input__label-price">Стоимость, млн ₽</p>
                    <div class="project-input__rangees">
                        <div class="rangees__inner">
                            от
                            <div class="formatting-end">
                            </div>
                        </div>
                        —
                        <div class="rangees__inner">
                            до
                            <div class="formatting-start">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="price-start" class="hide-end" />
                    <input type="hidden" name="price-end" class="hide-start" />
                    <div class="rangees"></div>
                </div>
                <div class="project-input project-filter__item">
                    <label for="square" class="project-input__label">Площадь, м2</label>
                    <x-ui.inputs.x-input class="square-input" id="square" name="square" placeholder="До">
                    </x-ui.inputs.x-input>
                </div>
                <div class="project-input project-filter__item">
                    <label for="floors" class="project-input__label">Кол-во этажей</label>
                    <div class="floors__wrapper">
                        <div class="floors__item">
                            <input class="floors__input" type="radio" name="floor" value="1" id="one-floor">
                            <label class="floors__label" for="one-floor">1</label>
                        </div>
                        <div class="floors__item">
                            <input class="floors__input" type="radio" name="floor" value="2" id="two-floor">
                            <label class="floors__label" for="two-floor">2</label>
                        </div>
                        <div class="floors__item">
                            <input class="floors__input" type="checkbox" name="terrace" value="true" id="terrace">
                            <label class="floors__label" for="terrace">+ терасса</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-option">
            <p class="project-option__text">Найдено <span class="quantity-obj">45</span> объектов</p>
            <button class="default__button cls__button">Отменить фильтр</button>
            <button class="default__button apply__button">Применить</button>
        </div>
    </form>
</section>

<section>
</section>

<section class="project-info">
    <div class="project-info__sort">
        <x-ui.lists.dropdown class="house-short__dropdown" id="house-short" name="house-short">
            <?php
                $short_setting = [
                    'Сначала дешевле',
                    'Сначала дороже',
                    'Сначала дешевле'];
                ?>

            @foreach($short_setting as $method)
            <x-ui.lists.option value="{{$method}}">
                {{$method}}
            </x-ui.lists.option>
            @endforeach
        </x-ui.lists.dropdown>
    </div>

    <div class="project-wrapper">
        @for ($i = 0; $i < 9; $i++) <x-cards.project-item theme="dark" project-info={{}}>
            </x-cards.project-item>
            @endfor
            <button class="default__button more__button">Показать еще 15 из 45 проектов</button>
    </div>
    <div class="project-call">
        <h1 class="project-call__heading">Авторизуйтесь в личном кабинете, чтобы экономить время и отслеживать все
            действия и этапы строительства</h1>
        <a href="/">
            <img class="project-call__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                alt="icon">
        </a>
    </div>
</section>
<x-section.constructor></x-section.constructor>
@endsection