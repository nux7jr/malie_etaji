@push('head')
@once
@vite('resources/css/components/certificates.css')
@endonce
@endpush

<section class="certificates">
  <h1 class="certificates__heading">
    {{__('Сертификаты')}}
  </h1>
  <p class="certificates__text">
    {{__('Lorem Ipsum является стандартной "рыбой" для текстов
    на латинице с начала XVI века. В то время некий безымянный
    печатник создал большую коллекцию размеров и форм шрифтов.')}}
  </p>

  <div class="swiper certificates-swiper">
    <div class="swiper-wrapper certificates-wrapper">
      @for ($i = 0; $i < 10; $i++) <div class="swiper-slide certificates-slide">
        <a data-fslightbox="gallery" href="https://placehold.co/228x313" class="certificates__img"
          style="background-image: url(https://placehold.co/228x313)">

        </a>
    </div>
    @endfor
  </div>
  <div class="swiper-pagination certificates-pagination">
  </div>
  </div>

</section>