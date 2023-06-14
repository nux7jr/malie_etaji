@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/technologies/technologies.js')
@vite('resources/css/pages/technologies/technologies.css')
@endsection

@section('content')


@php
use App\Content\main\StageCards;
$stage = new StageCards();
use App\Content\main\SpecPeople;
$spec_people = new SpecPeople();

use App\Content\main\AboutTech;
$about_heading = new AboutTech();
$format_info = $about_heading->toArray();

@endphp


<x-section.about-header format={!!json_encode($format_info)!!} paths={!!json_encode($paths)!!}>
</x-section.about-header>

<section class="tech-slider" id="technologies">
  <div class="tech-slider__wrapper">
    <h1 class="tech-slider__heading">
      {{__('Технологии, которые мы используем')}}
    </h1>

    <div class="tech-abs">
      <div class="tech-about">
        <img class="tech-about__img" src="{{ Vite::asset('resources/images/tech/sip.webp') }}" alt="sip">
        <div class="tech-about__info">
          <h2 class="tech-about__h2">
            SIP-панели
          </h2>
          <p class="tech-about__paraf">
            {{__('Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem
            Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.')}}
          </p>
        </div>
      </div>
      <div class="swiper unreal-swiper">
        <div class="swiper-wrapper unreal-wrapper">
          <div class="swiper-slide unreal-slide"></div>
          <div class="swiper-slide unreal-slide"></div>
          <div class="swiper-slide unreal-slide"></div>
          <div class="swiper-slide unreal-slide"></div>
          <div class="swiper-slide unreal-slide"></div>
          <div class="swiper-slide unreal-slide"></div>
        </div>
      </div>
      <div class="unreal__option">
        <div class="swiper-button-prev unreal-prev"></div>
        <div class="swiper-button-next unreal-next"></div>
      </div>
      <div class="swiper-pagination unreal-pagination"></div>
    </div>
  </div>
  <div class="tech-call">
    {{-- <img src="{{Vite::asset('/resources/images/icons/offer_arr_red.svg')}}" alt=""> --}}
    <div class="tech-call__item">
      <p class="tech-call__paraf">{{__('Не знаете что выбрать? Проконсультируйтесь с нашим специалистом')}}</p>
      <a class="tech-call__link" href="/">
        <img class="tech-call__img" src="{{Vite::asset('resources/images/icons/offer_arr_red.svg')}}" alt="link">
      </a>
    </div>
    <div class="tech-call__item">
      <p class="tech-call__paraf">{{__('Расчитать проект')}}</p>
      <a class="tech-call__link" href="/">
        <img class="tech-call__img" src="{{Vite::asset('resources/images/icons/offer_arr_red.svg')}}" alt="link">
      </a>
    </div>
  </div>
</section>

<section class="stage" id="stage">
  <h1 class="stage__heading">
    {{ __('Карта этапов строительства дома') }}
  </h1>
  <div class="stage__wrapper">
    <div class="stage-pagination"></div>
    <div class="swiper stage-swiper">
      <div class="swiper-wrapper stage-wrapper">
        @foreach ($stage->toArray() as $item) <div class="swiper-slide stage-slide">
          <div class="stage-inner">
            <div class="stage-right" style="background-image: url({{ $item['image'] }})">
            </div>
            <div class="stage-left">
              <p class="stage-slide__index">
                {{ $item['stage'] }}
              </p>
              <h2 class="stage-slide__heading">
                {{ $item['title']}}
              </h2>
              <div class="stage-slide__wrapper">
                <ul class="stage-slide__list">
                  <p class="stage-slide__ul-heading">
                    {{ $item['heading']}}
                  </p>
                  @foreach ($item['list'] as $items)
                  <li class="stage-slide__li">
                    {{$items}}
                  </li>
                  @endforeach
                </ul>
                <p class="stage-slide__paraf">
                  {{ $item['paraf'] }}
                </p>
              </div>
              <div class="stage-option">
                <div class="stage-button-prev">
                  <img class="stage-option__img stage-option__img-back"
                    src="{{ Vite::asset('resources/images/swiper/next.svg') }}" alt="icon">
                </div>
                <div class="stage-button-next">
                  <img class="stage-option__img" src="{{ Vite::asset('resources/images/swiper/next.svg') }}" alt="icon">
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
</section>
<section class="spec">
  <div class="spec__header">
    <h1 class="spec__heading">
      {{ __('Каждый этапы работ выполняют отдельные специалисты') }}
    </h1>
    <p class="spec__small">
      {{ __('А не мастер на все руки') }}
    </p>
    <div class="spec-pagination"></div>
  </div>
  <div class="swiper spec-swiper">
    <div class="swiper-wrapper spec-wrapper">
      @php
      $data_spec = $spec_people->toArray();
      @endphp
      @foreach ($data_spec as $item) <div class="swiper-slide spec-slide">
        <div class="spec__inner">
          <div class="spec__img" style="background-image: url({{$item['image']}})"></div>
          {{-- <img class="spec__img" src="{{$item['image']}}" alt="logo"> --}}
          <p class="spec__name">
            {{$item['name']}}</p>
          <p class="spec__profile">
            {{$item['spec']}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="spec__option">
    <div class="spec-button spec-button-prev">
      <img class="spec-option__img" src="{{ Vite::asset('resources/images/swiper/next.svg') }}" alt="icon">
    </div>
    <div class="spec-button spec-button-next">
      <img class="spec-option__img" src="{{ Vite::asset('resources/images/swiper/next.svg') }}" alt="icon">
    </div>
  </div>
</section>

<section class="tech-part" id='partners'>
  <h1 class="tech-part__wrapper">{{__('Технологии партнеров')}}</h1>
  <p class="tech-part__paraf">
    {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
    безымянный
    печатник создал большую коллекцию размеров и форм шрифтов.')}}
  </p>
  <div class="part-list">
    <div class="part-list__item" style="background-image: url({{Vite::asset('resources/images/about/xl-pipe.jpg')}})">
    </div>
    <div class="part-list__item part-list__item--small">
      <h1 class="part-list__heading">
        {{__('Теплые полы Daewoo Enertec')}}
      </h1>
      <p class="part-list__paraf">
        {{__('Lorem Ipsum является стандартной "рыбой"')}}
      </p>
    </div>
    <div class="part-list__item part-list__item--small">
      <h1 class="part-list__heading">
        {{__('Теплые полы XL-pipe')}}
      </h1>
      <p class="part-list__paraf">
        {{__('Lorem Ipsum является стандартной "рыбой"')}}
      </p>
    </div>
    <div class="part-list__item">
      <h1 class="part-list__heading">
        {{__('Инженерные коммуникации Отопить.РФ')}}
      </h1>
      <p class="part-list__paraf">
        {{__('Lorem Ipsum является стандартной "рыбой')}}</p>
    </div>
    <div class="part-list__item">
      <h1 class="part-list__heading">
        {{__('Нано-фильтры для окон Nanofiber')}}</h1>
      <p class="part-list__paraf">
        {{__('Lorem Ipsum является стандартной "рыбой')}}
      </p>
    </div>
    <div class="part-list__item" style="background-image: url({{Vite::asset('resources/images/about/nf.jpg')}})">
    </div>
    <div class="part-list__item">
      <h1 class="part-list__heading">
        {{__('Котельное отопление Defro, Pereko, Koloss')}}
      </h1>
      <p class="part-list__paraf">
        {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
        безымянный печатник создал большую коллекцию размеров и форм шрифтов.')}}
      </p>
    </div>
    <div class="part-list__item">
      <h1 class="part-list__heading">
        {{__('Скидки и промокоды от наших партнеров')}}
      </h1>
      <a class="part-list__link" href="/">
        <img class="part-list__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg')}}" alt="link">
      </a>
    </div>
    <button class="default__button part-more__button">Все технологии</button>
  </div>
</section>
<x-section.certificates>
</x-section.certificates>
<x-section.feedback>
</x-section.feedback>
<x-section.faq>
</x-section.faq>
<x-section.grid-template>
</x-section.grid-template>
@endsection