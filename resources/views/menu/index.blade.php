@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/menu/menu.js')
@vite('resources/css/pages/menu/menu.css')
@endsection

@section('content')

<div class="mob-list">
  <div class="mob-list__item">
    <button class="mob-list__button">{{__('Проекты')}}</button>
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
        <a class="mob-list__link" href="/projects/barns">{{__('Барны')}}</a>
      </li>
    </ul>
  </div>
  <hr class="mob__hr" />
  <div class="mob-list__item">
    <button class="mob-list__button">{{__('Ипотека')}}</button>
    <ul class="mob-list__ul">
      <li class="mob-list__li">
        <a class="mob-list__link" href="/mortgage/family/#mortgage-programs">{{__('Семейная ипотека')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="/mortgage/capital/#mortgage-programs">{{__('Материнский капитал')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="/mortgage/installment/#mortgage-programs">{{__('Рассрочка')}}</a>
      </li>
      <li class="mob-list__li">
        <a class="mob-list__link" href="">{{__('IT-ипотека')}}</a>
      </li>
    </ul>
  </div>
  <hr class="mob__hr" />
</div>

@endsection