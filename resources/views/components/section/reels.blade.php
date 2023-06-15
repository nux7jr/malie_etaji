@push('head')
@once
@vite('resources/css/components/reels.css')
@vite('resources/js/components/reels.js')
@endonce
@endpush
@php
use App\Content\main\Reels;
$reels = (new Reels())->toArray();

@endphp


<section class="reels">
  <h1 class="reels__heading">Посмотрите короткие ролики, чтобы узнать о нас больше</h1>
  <div class="swiper reels-swiper">
    <div class="swiper-wrapper reels-wrapper">
      @foreach ($reels['0'] as $item)
      <div class="swiper-slide reels-slide">
        <a data-fslightbox="video" href="{{ $item }}" class="" style="background-image: url({{ $item }})">
          <video class="reels-video" src="{{ $item }}"></video>
        </a>
      </div>
      @endforeach
    </div>
    <div class="pag-block">
      <div class="swiper-pagination reels-pagination"></div>
    </div>
  </div>
</section>