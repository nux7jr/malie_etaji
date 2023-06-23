@push('head')
@once
@vite('resources/css/components/case.css')
@endonce
@endpush


<section class="case">
  <h1 class="case__heading">
    {{ __('Технологии современного дома') }}
  </h1>
  <div class="case__wrapper">
    <div class="case__item case-card">
      <div class="case-card__header">
        <h1 class="case-card__heading">{{ __('SIP-панели') }}</h1>
        <p class="case-card__paraf">
          {{ __('Самая энергоэффективная и экологичная технология строительства. Сэндвич-дом по СИП-технологиям – одно
          из самых эффективных и технологичных решений на сегодняшний день.') }}
        </p>
      </div>
      <div class="case-card__img">
        <img class="case-card__icon" src="{{ Vite::asset('resources/images/components/img.svg') }}" alt="">
      </div>
      <a href="/about/technologies" class="default__button case-card__button">
        {{ __('Узнать больше') }}
      </a>
    </div>
    <div class="nap-wrapper">
      <div class="small-card normal-card">
        <h1 class="small-card__heading">
          {{ __('Электро-водяной пол XL PIPE') }}
        </h1>
        <p class="small-card__text">
          {{ __('Экономичная, инновационная система отопления без котла.  ') }}
        </p>
        <a class="small-card__link" href="https://xl-pipe.ru/" target="_blank" rel="noopener noreferrer">
          <img class="small-card__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="">
        </a>
      </div>
      <div class="small-card normal-card">
        <h1 class="small-card__heading">
          {{ __('Оконные фильтры Nanofiber') }}
        </h1>
        <p class="small-card__text">
          {{ __('Инновационный оконный фильтр из Южной Кореи для защиты от  внешних факторов из открытого окна в любое
          время года, которому нет аналогов!') }}
        </p>
        <a class="small-card__link" href="https://xn--80aaoumbhyk.xn--p1ai/" target="_blank" rel="noopener noreferrer">
          <img class="small-card__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="">
        </a>
      </div>
      {{-- <div class="small-card smalls-card">
        <h1 class="small-card__heading">
          {{ __('Котлы отопления') }}
        </h1>
        <p class="small-card__text">
          {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. ') }}
        </p>
        <a class="small-card__link" href="http://" target="_blank" rel="noopener noreferrer">
          <img class="small-card__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="">
        </a>
      </div>
      <div class="small-card long-card">
        <h1 class="small-card__heading">
          {{ __('Инженерные коммуникации') }}
        </h1>
        <p class="small-card__text">
          {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то
          время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.') }}
        </p>
        <a class="small-card__link" href="http://" target="_blank" rel="noopener noreferrer">
          <img class="small-card__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="">
        </a>
      </div> --}}
    </div>
  </div>
</section>