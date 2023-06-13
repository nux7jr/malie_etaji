@push('head')
@once
@vite('resources/css/components/trusted.css')
@vite('resources/js/components/trusted.js')
@endonce
@endpush

<section class="trusted" style="display: none">
  <h1 class="trusted__heading">
    {{ __('Нам доверяют') }}
  </h1>
  <p class="trusted__text">
    {{ __('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то
    время некий безымянный
    печатник создал большую коллекцию размеров и форм шрифтов.') }}
  </p>

  <div class="swiper trusted-swiper">

    <div class="swiper-wrapper trusted-wrapper">
      @for ($i = 0; $i < 5; $i++) <div class="swiper-slide trusted-slide">
        <img src="https://www.vogue.com/verso/static/vogue/assets/us/logo.svg" alt="logo">
    </div>
    @endfor
  </div>

  <div class="swiper-pagination trusted-pagination"></div>
  </div>
</section>