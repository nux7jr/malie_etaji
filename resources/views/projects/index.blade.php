@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/projects/projects.js')
@vite('resources/css/pages/projects/projects.css')
@endsection

@section('content')

<script>
    const data = '{!! json_encode($projects) !!}';
    Window.data = JSON.parse(data);
</script>


<section class="filters">
    <x-ui.path.path class="filters-path" paths="{!! json_encode($paths) !!}">
    </x-ui.path.path>
    <form class="filter__form">
        <div class="project-filter">
            <h1 class="project-filter__heading">Выбрать дом</h1>
            <div class="project-filter__wrapper">
                <div class="project-input project-filter__item">
                    <label for="house-list" class="project-input__label">Линейка домов</label>
                    <x-ui.lists.dropdown class="house-list__dropdown cls" id="house-list" name="house-list">
                        @foreach($house_setting as $option)
                        <x-ui.lists.option value="{{$option}}" class="cls">
                            {{$option}}
                        </x-ui.lists.option>
                        @endforeach
                    </x-ui.lists.dropdown>
                </div>
                <div class="project-input project-input__price">
                    <p class="project-input__label project-input__label-price">Стоимость, млн ₽</p>
                    <div class="project-input__rangees">
                        <div class="rangees__inner">
                            от
                            <div class="formatting-end">
                            </div>
                        </div>
                        <span class="line">—</span>
                        <div class="rangees__inner">
                            до
                            <div class="formatting-start">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="price-start" class="hide-end" />
                    <input type="hidden" name="price-end" class="hide-start" />
                    <div class="rangees cls"></div>
                </div>

                <div class="project-input project-input__quare">
                    <p class="project-input__label project-input__label-price">Площадь, м2</p>
                    <div class="project-input__rangees">
                        <div class="rangees__inner">
                            от
                            <div class="square-end">
                            </div>
                        </div>
                        <span class="line">—</span>
                        <div class="rangees__inner">
                            до
                            <div class="square-start">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="square-start" class="square-hide-end" />
                    <input type="hidden" name="square-end" class="square-hide-start" />
                    <div class="rangees-square cls"></div>
                </div>

                <div class="project-input project-filter__item">
                    <label for="floors" class="project-input__label">{{__('Кол-во этажей')}}</label>
                    <div class="floors__wrapper">
                        <div class="floors__item">
                            <input class="floors__input" type="radio" name="floor" value="1" id="one-floor">
                            <label class="floors__label cls" for="one-floor">1</label>
                        </div>
                        <div class="floors__item">
                            <input class="floors__input" type="radio" name="floor" value="2" id="two-floor">
                            <label class="floors__label cls" for="two-floor">2</label>
                        </div>
                    </div>
                </div>
                <div class="project-input project-filter__item">
                    <label for="floors" class="project-input__label">{{__('Дополнительно')}}</label>
                    <div class="floors__wrapper">
                        <div class="floors__item">
                            <input class="floors__input" type="checkbox" name="garage" value="true" id="garage">
                            <label class="floors__label cls" for="garage">{{__('+ гараж')}}</label>
                        </div>
                        <div class="floors__item">
                            <input class="floors__input" type="checkbox" name="stockroom" value="true" id="stockroom">
                            <label class="floors__label cls" for="stockroom">{{__('+ кладовая')}}</label>
                        </div>
                        <div class="floors__item">
                            <input class="floors__input" type="checkbox" name="stockroom" value="true" id="wardrobe">
                            <label class="floors__label cls" for="wardrobe">{{__('+ гардеробная')}}</label>
                        </div>
                        <div class="floors__item">
                            <input class="floors__input" type="checkbox" name="terrace" value="true" id="terrace">
                            <label class="floors__label cls" for="terrace">{{__('+ терасса')}}</label>
                        </div>
                        <div class="floors__item">
                            <input class="floors__input" type="checkbox" name="balcony" value="true" id="balcony">
                            <label class="floors__label cls" for="balcony">{{__('+ балкон')}}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-option">
            <p class="project-option__text">{{__('Найдено')}}<span class="quantity-obj"> {{count($projects)}}
                </span>{{__('объектов')}}</p>
            <button class="default__button cls__button">{{__('Отменить фильтр')}}</button>
            <button class="default__button apply__button">{{__('Применить')}}</button>
        </div>
    </form>
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
        @foreach ($projects as $key => $item)
        <x-cards.project-item theme="dark" info="{!! json_encode($item) !!}">
        </x-cards.project-item>
        @endforeach
    </div>
    <button class="default__button more__button">{{__('Показать еще')}}<span class="q-projects">{{count($projects)}}
        </span>{{__('из')}}
        <span class="a-projects"> {{\App\Content\main\HousesInfo::$card_elements->count()}}
        </span>{{__('проектов')}}</button>
    <div class="project-call">
        <h1 class="project-call__heading">{{__('Авторизуйтесь в личном кабинете, чтобы экономить время и отслеживать все
            действия и этапы строительства')}}</h1>
        <a href="/">
            <img class="project-call__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
                alt="icon">
        </a>
    </div>
</section>
<x-section.constructor></x-section.constructor>
@endsection