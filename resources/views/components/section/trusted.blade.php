@push('head')
@once
@vite('resources/css/components/trusted.css')
@vite('resources/js/components/trusted.js')
@endonce
@endpush

@php

use App\Content\main\TrustedBank;
$trusted = (new TrustedBank())->toArray();

@endphp

<section class="trusted">
  <h1 class="trusted__heading">
    {{ __('Банки-партнеры') }}
  </h1>
  <p class="trusted__text">
    {{ __('Аккредитованы во всех крупных банках: Дом.РФ, Сбер, РоссельхозБанк, ВТБ, РосБанк, ПримСоцБанк, Левобережный, СургутНефтегазБанк, ПочтаБанк, СовкомБанк, МТСБанк.') }}
  </p>

  <div class="swiper trusted-swiper">

    <div class="swiper-wrapper trusted-wrapper">
      @foreach ($trusted as $item) <div class="swiper-slide trusted-slide">
        <img src="{{ $item }}" alt="logo">
    </div>
    @endforeach
  </div>

  <div class="swiper-pagination trusted-pagination"></div>
  </div>
</section>