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
      @foreach ($reels as $item)

      <div class="swiper-slide reels-slide">
        <a data-fslightbox="video" href="{{ $item['video'] }}" class="">
          <div class="reels-video" style="background-image: url({{ $item['preview']}})"></div>
        </a>
      </div>
      @endforeach
    </div>
    <div class="swiper-pagination reels-pagination"></div>
  </div>
</section>