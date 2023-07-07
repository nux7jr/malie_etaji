@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/menu/menu.js')
@vite('resources/css/pages/menu/menu.css')
@endsection

@section('content')

<section class="mob-list">
  <button class="default__button mgeo__button">
    <img class="mgeo__img" src="{{ Vite::asset('resources/images/menu/geo.svg')}}" alt="geo">
    <span class="mgeo__text">{{__('Екатеринбург')}}</span>
  </button>

  <div class="mob-list__item">
    <button class="mob-list__button">
      <span class="mob-list__span">{{__('Проекты')}}</span>
      <img class="mob-list__img" src="{{ Vite::asset('resources/images/menu/menuItem.svg')}}" alt="icon">
    </button>
    <ul class="mob-list__ul">
      <li class="mob-list__li">
        <a class="mob-list__link" href="/projects">{{__('Все проекты')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="/projects/single">{{__('Одноэтажные')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href=/projects/double">{{__('Двухэтажные')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="/projects/barn">{{__('Барны')}}</a>
      </li>
    </ul>
  </div>
  <hr class="mob__hr" />
  <div class="mob-list__item">
    <button class="mob-list__button">
      <span class="mob-list__span">{{__('Ипотека')}}</span>
      <img class="mob-list__img" src="{{ Vite::asset('resources/images/menu/menuItem.svg')}}" alt="icon">
    </button>
    <ul class="mob-list__ul">
      <li class="mob-list__li">
        <a class="mob-list__link" href="/mortgage/family/#mortgage-programs">{{__('Семейная ипотека')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="/mortgage/gos/#mortgage-programs">{{__('Господдержка')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="/mortgage/it/#mortgage-programs">{{__('IT-ипотека')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="/mortgage/away/#mortgage-programs">{{__('Дальневосточная')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="/mortgage/village/#mortgage-programs">{{__('Сельская')}}</a>
      </li>
    </ul>
  </div>
  <hr class="mob__hr" />
  <a class="mob__link" href="/invest">{{__('Инвестиции')}}</a>
  <hr class="mob__hr" />
  <a class="mob__link" href="/realtors">{{__('Риэлтору')}}</a>
  <hr class="mob__hr" />
  <a class="mob__link" href="/about">{{__('О нас')}}</a>
  <hr class="mob__hr" />
  <a class="mob__link" href="https://krasnoyarsk.hh.ru/employer/895977">{{__('Карьера')}}</a>
  <hr class="mob__hr" />
  <a class="mob__link" href="/blog">{{__('Блог')}}</a>
  <hr class="mob__hr" />
  <a class="mob__link" href="/contacts">{{__('Контакты')}}</a>
</section>

@endsection