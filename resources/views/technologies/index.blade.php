@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/technologies/technologies.js')
@vite('resources/css/pages/technologies/technologies.css')
@endsection

@section('content')
<x-section.about-header paths={!!json_encode($paths)!!}></x-section.about-header>

{{-- <section class="photo-gallery">
  <div class="photo-wrapper">
    <div class="photo-header">
      <h1 class="photo-gallery__heading">
        Фотографии
      </h1>
      <p class="photo-gallery__paraf">
        Lorem Ipsum является стандартной "рыбой" для текстов
        на латинице с начала XVI века. В то время некий безымянный
        печатник создал большую коллекцию размеров и форм шрифтов.
      </p>
    </div>
    <div class="swiper photo-gallery__swiper">
      <div class="swiper-wrapper photo-gallery__wrapper">
        @for ($i = 0; $i < 15; $i++) <div class="swiper-slide photo-gallery__slide">
          <div class="photo-gallery__img" style="background-image: url(https://placehold.co/228x313)">
          </div>
      </div>
      @endfor
    </div>
    <div class="swiper-pagination photo-pagination  photo-gallery__pagination">
    </div>
    <div class="photo-gallery__option">
      <div class="photo-gallery__button-prev">
        <img class="photo-gallery-prev" src="{{ Vite::asset('resources/images/build/next.svg') }}" alt="prev">
      </div>
      <div class="photo-gallery__button-next">
        <img class="photo-gallery-next" src="{{ Vite::asset('resources/images/build/next.svg') }}" alt="next">
      </div>
    </div>
  </div>
</section> --}}
<x-section.tech>
</x-section.tech>
<x-section.certificates>
</x-section.certificates>
<x-section.feedback>
</x-section.feedback>

<x-section.grid-template>
</x-section.grid-template>
@endsection