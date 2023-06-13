@push('head')
@once
@vite('resources/css/components/certificates.css')
@endonce
@endpush

@php
use App\Content\main\CertCards;
$cert_cards = new CertCards();
$cert_data = $cert_cards->toArray();
@endphp

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
      @foreach ($cert_data as $item)

      <div class="swiper-slide certificates-slide">
        <a data-fslightbox="gallery" href="{{ $item }}" class="certificates__img"
          style="background-image: url({{ $item }})">
        </a>
      </div>
      @endforeach
    </div>
    <div class="swiper-pagination certificates-pagination">
    </div>
  </div>

</section>