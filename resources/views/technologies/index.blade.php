@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/technologies/technologies.js')
@vite('resources/css/pages/technologies/technologies.css')
@endsection

@section('content')
<x-section.about-header paths={!!json_encode($paths)!!}></x-section.about-header>

<section class="tech-slider" id="technologies">
  <div class="tech-slider__wrapper">
    <h1 class="tech-slider__heading">
      {{__('Технологии, которые мы используем')}}
    </h1>
    <div class="tech-slider__option">
      @for ($i = 0; $i < 6; $i++) <button class="default__button tech-slider__button">ЛСТК</button>
        @endfor

        <button class="default__button tech-slider__button tech-slider__button-active">Сип-панели</button>
    </div>
    <div class="tech-abs">
      <div class="tech-about">
        <img class="tech-about__img" src="{{ Vite::asset('/resources/images/tech/sip.webp') }}" alt="sip">

        <div class="tech-about__info">
          <p class="tech-about__paraf">
            {{__('Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem
            Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.')}}
          </p>
          <p class="tech-about__paraf">
            {{__('Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem
            Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.')}}
          </p>
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
        <img class="tech-call__img" src="{{Vite::asset('/resources/images/icons/offer_arr_red.svg')}}" alt="link">
      </a>
    </div>
    <div class="tech-call__item">
      <p class="tech-call__paraf">{{__('Расчитать проект')}}</p>
      <a class="tech-call__link" href="/">
        <img class="tech-call__img" src="{{Vite::asset('/resources/images/icons/offer_arr_red.svg')}}" alt="link">
      </a>
    </div>
  </div>
</section>
<section class="tech-part">
  <h1 class="tech-part__wrapper">{{__('Технологии партнеров')}}</h1>
  <p class="tech-part__paraf">
    {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
    безымянный
    печатник создал большую коллекцию размеров и форм шрифтов.')}}

  </p>
  <div class="part-list">
    <div class="part-list__item" style="background-image: url({{Vite::asset('resources/images/house/house.jpg')}})">
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
    <div class="part-list__item" style="background-image: url({{Vite::asset('resources/images/house/house.jpg')}})">
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
        <img class="part-list__img" src="{{ Vite::asset('/resources/images/icons/offer_arr_red.svg')}}" alt="link">
      </a>
    </div>

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