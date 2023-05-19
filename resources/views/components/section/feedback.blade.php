@push('head')
    @once
        @vite('resources/css/components/feedback.css');
        {{-- @vite('resources/js/components/feedback.js'); --}}
    @endonce
@endpush

<section class="feedback">
    <h1 class="feedback__heading">Отзывы клиентов “Малые этажи”</h1>
    <div class="swiper feedback-swiper">
        <div class="swiper-wrapper feedback-wrapper">

            <div class="swiper-slide feedback-slide">Slide 3</div>
            <div class="swiper-slide feedback-slide">Slide 1</div>
            <div class="swiper-slide feedback-slide">Slide 2</div>
            <div class="swiper-slide feedback-slide">Slide 3</div>
        </div>
        <div class="swiper-button-prev feedback-button-prev"></div>
        <div class="swiper-button-next feedback-button-next"></div>

        <div class="swiper-scrollbar"></div>
    </div>
    <div><a data-fslightbox="gallery" href="https://i.imgur.com/fsyrScY.jpg">
            Open the first slide (an image)
        </a>
        <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=xshEZzpS4CQ">
            Open the second slide (a YouTube video)
        </a>
        <a data-fslightbox="gallery"
            href="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4">
            Open the third slide (an HTML video)
        </a>
        <a data-fslightbox="gallery" href="#vimeo">
            Open the fourth slide (a Vimeo video—a custom source)
        </a>
        <iframe id="vimeo" src="https://player.vimeo.com/video/22439234" width="1920px" height="1080px"
            frameBorder="0" allow="autoplay; fullscreen" allowFullScreen></iframe>
    </div>
</section>
