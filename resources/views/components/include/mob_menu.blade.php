@push('head')
@once
@vite('resources/js/components/mob_menu.js')
@vite('resources/css/components/mob_menu.css')
@endonce
@endpush

<div class="mob-menu">
  <div class="mob-menu__wrapper">
    <a href="/projects">
      <img src="" alt="icon">
      <span>{{__('Проекты')}}</span>
    </a>
    <a href="/projects">
      <img src="" alt="icon">
      <span>{{__('Ипотека')}}</span>
    </a>
    <a href="/profile">
      <img src="" alt="icon">
      <span>{{__('Профиль')}}</span>
    </a>
    <a>
      <img src="" alt="icon">
      <span>{{__('Меню')}}</span>
    </a>
  </div>
  <div class="scroll-menu">
    <button class="geo-menu">
      <img class="geo-img" src="" alt="geo">
      <span class="geo-text">{{__('Екатеринбург')}}</span>
    </button>
  </div>
</div>