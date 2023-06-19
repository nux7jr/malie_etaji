@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/project-item/project-item.js')
@vite('resources/css/pages/project-item/project-item.css')
@endsection


@section('content')
@php

// use App\Content\main\HousesInfo;
// $HousesInfo = new HousesInfo();
use App\Content\main\HousesInfo;

@endphp

<div class="swiper project-item__swiper">
  <x-ui.path.path paths={!!json_encode($paths)!!} class="project-item__path"></x-ui.path.path>
  <div class="swiper-wrapper project-item__wrapperes">
    @foreach ($info['big_slider_images'] as $item) <div class="swiper-slide project-item__slide"
      style="background-image: url('{{ $item }}')">
    </div>
    @endforeach
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
    <div class="timer">
      <h1 class="timer__h1">
        {{__('Фундамент в подарок')}}
      </h1>
      <p class="timer__paraf">{{__('Акция закончится через')}}</p>
      <div class="timer__label">
        <div class="timer__item">
          <span class="timer__time">{{__('00')}}</span>
          <span class="timer__info">{{__('дня')}}</span>
        </div>
        :
        <div class="timer__item">
          <span class="timer__time">{{__('00')}}</span>
          <span class="timer__info">{{__('час.')}}</span>
        </div>
        :
        <div class="timer__item">
          <span class="timer__time">{{__('00')}}</span>
          <span class="timer__info">{{__('мин.')}}</span>
        </div>
        :
        <div class="timer__item">
          <span class="timer__time">{{__('00')}}</span>
          <span class="timer__info">{{__('сек.')}}</span>
        </div>
      </div>
      <p class="timer__lasttime">{{__('Успейте приобрести дом до 30 августа 2023')}}</p>
      <a class="timer__link" href="#mortgage-calc">{{__('Рассчитать ипотеку')}}</a>
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
          @php
          echo number_format($info['price_end'], 0, '', ' ')." ₽";
          @endphp
        </h1>
      </div>
      <div class="header-section__price">
        <p class="header-section__about">
          {{__('Цена “Под ключ”')}}
          <button class="tooltip">
            <img class="toltip-button__img" src="{{ Vite::asset('resources/images/components/toltip.svg') }}"
              alt="toltip">
            <span class="tooltiptext">
              {{ __(' Tooltip text') }}
            </span>
          </button>
        </p>
        <h1 class="header-section__value">
          @php
          echo number_format($info['price_finish'], 0, '', ' ')." ₽";
          @endphp
        </h1>
      </div>
    </div>
  </div>
  <div class="project-settings">
    @isset ($info['item_info']['square'])
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['square']}}м2
      </h1>
      <p class="project-settings__name">{{__('площадь')}}</p>
    </div>
    @endisset
    @isset ($info['item_info']['floors'])
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['floors']}}
      </h1>
      @if($info['item_info']['floors'] == '1')
      <p class="project-settings__name">{{__('этаж')}}</p>
      @else
      <p class="project-settings__name">{{__('этажа')}}</p>
      @endif
    </div>
    @endisset
    @isset ($info['item_info']['bedrooms'])
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['bedrooms']}}
      </h1>
      @if ($info['item_info']['bedrooms'] == "1")
      <p class="project-settings__name">{{__('спальня')}}</p>
      @else
      <p class="project-settings__name">{{__('спальни')}}</p>
      @endif
    </div>
    @endisset
    @isset ($info['item_info']['bathrooms'])
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['bathrooms']}}
      </h1>
      @if ($info['item_info']['bathrooms'] == '1')
      <p class="project-settings__name">{{__('санузел')}}</p>
      @else
      <p class="project-settings__name">{{__('санузла')}}</p>
      @endif
    </div>
    @endisset

    @isset($info['item_info']['parking'])
    <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{$info['item_info']['parking']}}
      </h1>
      <p class="project-settings__name">{{__('машиноместа')}}</p>
    </div>
    @endisset

  </div>
  <hr class="project-hr">
  <div class="about-project">
    <div class="about-project__text">
      <h1 class="about-project__h1">
        {{__('О проекте')}}
      </h1>
      <div class="about-project__text-wrapper">
        @foreach ($info['about'] as $item)
        <p class="about-project__paraf">
          {{$item}}
        </p>
        @endforeach
      </div>
      <div class="about-project__option">
        <a href="{{$info['preview']['plan'][0]}}" class="about-project__button default__button">
          <img class="about-project__button-img" src="{{ Vite::asset('resources/images/icons/download.svg') }}"
            alt="download">
          {{__('Скачать проект бесплатно')}}
          <span></span>
        </a>
        <a href="/mortgage" class="about-project__mach default__button">
          {{__('Рассчитать ипотеку')}}
        </a>
      </div>
    </div>
    <div class="about-project__list">
      <div class="swiper about-project__swiper">
        <div class="swiper-wrapper about-project__wrapper">
          @foreach ($info['about_images'] as $item)
          <div class="swiper-slide about-project__slide">
            <div class="about__image" style="background-image: url({{ $item }})"></div>
          </div>
          @endforeach
        </div>
        <div class="swiper-pagination about-project__pagination"></div>
      </div>
    </div>
  </div>
</section>
<section class="project-preview">
  <div class="project-preview__option">
    <button class="default__button project-preview__button project-preview__button-active" data-filter="plan">
      {{__('Планировка')}}</button>
    <button class="default__button project-preview__button" data-filter="facade">{{__('Фасад')}}</button>
    <button class="default__button project-preview__button" data-filter="d3">{{__('3D-визуализация')}}</button>
  </div>
  <div class="project-preview__wrapper">
    <div class="project-preview__item plan">
      <embed class="project-embed" src="{{$info['preview']['plan'][0]}}" type="application/pdf" width="100%" />
    </div>
    <div class="project-preview__item facade">
      <div class="swiper facade-swiper">
        <div class="swiper-wrapper facade-wrapper">
          @foreach ($info['preview']['facade'] as $item)
          <div class="swiper-slide facade-slide">
            <div class="facade-inner" style="background-image: url('{{ $item }}')">

            </div>
          </div>
          @endforeach
        </div>
        <div class="swiper-pagination facade-pagination"></div>
      </div>
    </div>
    <div class="project-preview__item project-preview__item--video d3">
      @if ($info['preview']['3d'][0])
      <video class="video-js project-video" controls preload="auto" poster="{{ $info['about_images'][0] }}"
        data-setup="{}">
        <source src="{{$info['preview']['3d'][0]}}" type="video/mp4" />
        <p class="vjs-no-js">
          To view this video please enable JavaScript, and consider upgrading to a
          web browser that
          <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
      </video>
      @else
      <p>{{__('Видео недоступно')}}</p>
      @endif
    </div>
  </div>
  <div class="change-plan">
    <div class="change-plan__text">
      <h2 class="change-plan__header">{{__('Хотите изменить планировку?')}}</h2>
      <p class="change-plan__paraf">{{__('Наши архитекторы и конструкторы адаптируют любой из типовых проектов под ваши
        потребности. В наших домах представлен широкий выбор отделочных фасадных материалов, которые будет подобраны под
        ваш вкус. ')}}</p>
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
      <div class="peculiarities__card peculiarities__big"
        style="background-image: url({{$info['peculiarities'][0]['img']}})">
        <p class="peculiarities__paraf">
          {{$info["peculiarities"][0]['text']}}
        </p>
      </div>
      <button class="default__button peculiarities__more">Показать все особености</button>
      <div class="peculiarities__list">
        @php
        unset($info["peculiarities"][0])
        @endphp
        @foreach ($info["peculiarities"] as $item)
        <div @if ($loop->first)
          class="peculiarities__card flex-one"
          @endif
          class='peculiarities__card'
          style="background-image: url('{{$item['img']}}')">
          <p class="peculiarities__paraf">{{$item['text']}}</p>
        </div>
        @endforeach
      </div>
    </div>
    {{-- <div class="peculiarities__body">
      <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
        <p class="peculiarities__paraf">{{__('Расположение и инфраструктура')}}</p>
      </div>
      <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
        <p class="peculiarities__paraf">{{__('Качественный сервис и широта спектра услуг')}}</p>
      </div>
    </div> --}}
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
      <div class="swiper-wrapper project-mortgage__wrapper">
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
      {{__('Одной из ключевых причин стабильности компании, является наша команда высококвалифицированных архитекторов,
      инженеров, строителей и менеджеров. Мы постоянно работаем над улучшением существующих строительных технологий и
      разработкой новых проектов загородных домов. ')}}
    </p>
  </div>
  <div class="stability__wrapper">
    @php
    $why = [
    '0' => [
    "title" => '120',
    "subtitle" => 'Готовых домов',
    "text" => 'Мы продолжаем работать над улучшением качества и сроков выполнения строительных работ, чтобы вы жили в
    лучших домах.',
    ],
    '1' => [
    "title" => '7',
    "subtitle" => 'регионов присутствия',
    "text" => 'Мы строим в Красноярске, Перми, Екатеринбурге, Тюмени, Барнауле, Иркутске и Владивостоке.',
    ],
    '2' => [
    "title" => '+10',
    "subtitle" => 'лет опыта работы',
    "text" => 'Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
    ],
    '3' => [
    "title" => '11',
    "subtitle" => 'банков партнеров',
    "text" => 'Аккредитованы во всех крупных банках: Дом.РФ, Сбер, РоссельхозБанк, ВТБ, РосБанк, ПримСоцБанк,
    Левобережный, СургутНефтегазБанк, ПочтаБанк, СовкомБанк, МТСБанк. ',
    ]
    ];
    @endphp
    @foreach ($why as $item) <article class="stability-card">
      <h2 class="stability-card__heading">
        <span class="stability-card__big">
          {{$item['title']}}
        </span>
        {{$item['subtitle']}}
      </h2>
      <p class="stability-card__paraf">{{$item['text']}}</p>
    </article>
    @endforeach
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
    $less3 = 0;
    while ($less3 < 3): $item=HousesInfo::getItemById($less3); $less3++; @endphp <x-cards.project-item
      info="{!! json_encode($item) !!}">
      </x-cards.project-item>
      @php
      endwhile;
      @endphp
  </div>
</section>

@endsection
{{-- @for ($i = 0; $i < 8; $i++) --}} {{-- @endfor --}}