@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/project-item/project-item.js')
@vite('resources/css/pages/project-item/project-item.css')
@endsection


@section('content')
@php

use App\Content\main\HousesInfo;
$HousesInfo = new HousesInfo();

@endphp

<div class="swiper project-item__swiper">
  <x-ui.path.path paths={!!json_encode($paths)!!} class="project-item__path"></x-ui.path.path>
  <div class="swiper-wrapper project-item__wrapperes">
    @for ($i = 0; $i < 10; $i++) <div class="swiper-slide project-item__slide"
      style="background-image: url('{{ Vite::asset('resources/images/project-item/big.jpg') }}')">
  </div>
  @endfor
</div>
<div class="swiper-button-prev project-item__prev"></div>
<div class="swiper-button-next project-item__next"></div>


</div>
<section class="project-info">
  <div class="project-info__header header-section">
    <div class="header-section__asd">
      <p class="header-section__placenamer">
        {{$info['category']}}
      </p>
      <h2 class="header-section__name">
        {{$info['name']}}</h2>
    </div>
    <div class="header-section__item">
      <div class="header-section__price">
        <p class="header-section__about">
          {{__('Цена под отделку')}}
          <button class="tooltip">
            <img class="toltip-button__img" src="{{ Vite::asset('resources/images/components/toltip.svg') }}"
              alt="toltip">
            <span class="tooltiptext">
              {{ __(' Tooltip text') }}
            </span>
          </button>
        </p>
        <h1 class="header-section__value">
          {{-- {{__('4 500 000 ₽')}} --}}
          {{$info['price_end']}} ₽
        </h1>
      </div>
      <div class="header-section__price">
        <p class="header-section__about">
          {{__('Цена под отделку')}}
          <button class="tooltip">
            <img class="toltip-button__img" src="{{ Vite::asset('resources/images/components/toltip.svg') }}"
              alt="toltip">
            <span class="tooltiptext">
              {{ __(' Tooltip text') }}
            </span>
          </button>
        </p>
        <h1 class="header-section__value">
          {{-- {{__('4 500 000 ₽')}} --}}
          {{$info['price_finish']}} ₽
        </h1>
      </div>
    </div>
  </div>
  <div class="project-settings">
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['square']}}м2
      </h1>
      <p class="project-settings__name">{{__('площадь')}}</p>
    </div>
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['floors']}}
      </h1>
      <p class="project-settings__name">{{__('этажа')}}</p>
    </div>
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['bedrooms']}}
      </h1>
      <p class="project-settings__name">{{__('спальни')}}</p>
    </div>
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['bathrooms']}}
      </h1>
      <p class="project-settings__name">{{__('санузла')}}</p>
    </div>
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['ceiling']}}
      </h1>
      <p class="project-settings__name">{{__('высота потолков')}}</p>
    </div>
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['parking']}}
      </h1>
      <p class="project-settings__name">{{__('машиноместа')}}</p>
    </div>
  </div>
  <hr class="project-hr">
  <div class="about-project">
    <div class="about-project__text">
      <h1 class="about-project__h1">
        {{__('О проекте')}}
      </h1>
      <div class="about-project__text-wrapper">
        <p class="about-project__paraf">
          {{__('Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
          стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал
          большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не
          только
          успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.')}}
        </p>
        <p class="about-project__paraf">
          {{__('Lorem Ipsum - это
          текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов
          на
          латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
          шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных
          изменений пять веков, но и перешагнул в электронный дизайн.')}}
        </p>
      </div>
      <div class="about-project__option">
        <a href="/pdf" class="about-project__button default__button">
          <img class="about-project__button-img" src="{{ Vite::asset('resources/images/icons/download.svg') }}"
            alt="download">
          {{__('Скачать проект бесплатно')}}
          <span></span>
        </a>
        <button class="about-project__mach default__button">
          {{__('Рассчитать ипотеку')}}

        </button>
      </div>
    </div>
    <div class="about-project__list">
      <div class="swiper about-project__swiper">
        <div class="swiper-wrapper about-project__wrapper">
          @for ($i = 0; $i < 10; $i++) <div class="swiper-slide about-project__slide">
            <div class="about__image" style="background-image: url(https://placehold.co/600x400)"></div>
        </div>
        @endfor
      </div>
      <div class="swiper-pagination about-project__pagination"></div>
    </div>
  </div>
  </div>
</section>
<section class="project-preview">
  <div class="project-preview__option">
    <button class="default__button project-preview__button project-preview__button-active">
      {{__('Планировка')}}</button>
    <button class="default__button project-preview__button">{{__('Фасад')}}</button>
    <button class="default__button project-preview__button">{{__('3D-визуализация')}}</button>
  </div>
  <div class="project-preview__wrapper">
    <div class="project-preview__item plan"
      style="background-image: url('{{ Vite::asset('resources/images/project-item/plan.jpg') }}')">
    </div>
  </div>
  <div class="change-plan">
    <div class="change-plan__text">
      <h2 class="change-plan__header">{{__('Хотите изменить планировку?')}}</h2>
      <p class="change-plan__paraf">{{__('Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
        Lorem Ipsum является
        стандартной
        "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию
        размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил
        без заметных изменений пять веков, но и перешагнул в электронный дизайн.')}}</p>
    </div>
    <button class="default__button">{{__('Отправить заявку')}}</button>
  </div>
</section>
<section class="peculiarities">
  <h1 class="peculiarities__heading">

    {{__('Особенности проекта')}}
  </h1>
  <div class="peculiarities__wrapper">
    <div class="peculiarities__head">
      <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
        <p class="peculiarities__paraf">
          {{__('Качественный сервис и широта спектра услуг')}}
        </p>
      </div>
      <div class="peculiarities__list">
        <div class="peculiarities__card flex-one" style="background-image: url(https://placehold.co/600x400)">
          <p class="peculiarities__paraf">{{__('Просторный дом и доступная цена')}}</p>
        </div>
        <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
          <p class="peculiarities__paraf">{{__('Удобная покупка и быстрая сдача')}}</p>
        </div>
        <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
          <p class="peculiarities__paraf">{{__('Панорамное остекление')}}</p>
        </div>
        <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
          <p class="peculiarities__paraf">{{__('Современные планировки')}}</p>
        </div>
      </div>
    </div>
    <div class="peculiarities__body">
      <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
        <p class="peculiarities__paraf">{{__('Расположение и инфраструктура')}}</p>
      </div>
      <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
        <p class="peculiarities__paraf">{{__('Качественный сервис и широта спектра услуг')}}</p>
      </div>
    </div>
  </div>
  <x-form.review>
  </x-form.review>
</section>
<x-cards.house-card class="project-mortgage">
</x-cards.house-card>
<section class="project-mortgage">
  <h1 class="project-mortgage__heading">
    {{__('Ипотечные программы')}}
  </h1>
  <div class="project-mortgage__container">
    <div class="swiper project-mortgage__swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper project-mortgage__wrapper">
        <!-- Slides -->
        @for ($i = 0; $i < 8; $i++) <div class="swiper-slide project-mortgage__slide">
          <div class="project-mortgage__inner">
            <h1 class="project-mortgage__h1">
              {{__('от 3,5% для IT- специалистов')}}
            </h1>
            <a href="/mortgage" class="default__button project-mortgage__link">
              {{__('Узнать больше')}}
            </a>
          </div>
      </div>
      @endfor
    </div>
  </div>
  <div class="swiper-button-prev project-mortgage__prev"></div>
  <div class="swiper-button-next project-mortgage__next"></div>
  </div>
</section>
<section class="stability">
  <div class="stability__header">
    <h1 class="stability__heading">
      {{__('Почему “Малые этажи” стабильная компания?')}}
    </h1>
    <p class="stability__paraf">
      {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
      безымянный
      печатник создал большую коллекцию размеров и форм шрифтов.')}}
    </p>
  </div>
  <div class="stability__wrapper">
    @for ($i = 0; $i < 4; $i++) <article class="stability-card">
      <h2 class="stability-card__heading">
        <span class="stability-card__big">
          {{__('20')}}
        </span>
        {{__('построенных домов')}}
      </h2>
      <p class="stability-card__paraf">{{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала
        XVI века. ')}}</p>
      </article>
      @endfor
  </div>
</section>


<x-section.office-map>
</x-section.office-map>


<section class="more-projects">
  <div class="more-projects__header">
    <h1 class="more-projects__heading">{{ __('Похожие проекты') }}</h1>
    <a class="default__button" href="projects">
      {{__('Все проекты')}}
    </a>
  </div>
  <div class="more-projects__wrapper">
    @php
    $output = array_slice($HousesInfo->toArray(), 0, 3);
    @endphp

    @foreach ($output as $key => $item)
    <x-cards.project-item info="{!! json_encode($item) !!}">
    </x-cards.project-item>
    @endforeach
  </div>
</section>


@endsection
{{-- @for ($i = 0; $i < 8; $i++) --}} {{-- @endfor --}}