@push('head')
@once
@vite('resources/css/components/feedback.css')
@endonce
@endpush

<section class="feedback" style="display: none">
    <h1 class="feedback__heading">Отзывы клиентов “Малые этажи”</h1>
    <div class="feedback__wrapper">
        <div class="swiper feedback-swiper">
            <div class="swiper-wrapper feedback-wrapper">
                @for ($i = 0; $i < 10; $i++) <div class="swiper-slide feedback-slide">
                    <a style="background-image: url(https://placehold.co/255x300)" class="feedback-slide__video"
                        data-fslightbox="youtube-video" data-video-poster="https://placehold.co/255x300"
                        href="https://www.youtube.com/watch?v=d4eDWc8g0e0">
                        <img class="play-button__img" src="{{ Vite::asset('resources/images/components/play.svg') }}"
                            alt="play">
                    </a>
            </div>
            @endfor
        </div>
    </div>
    <div class="feedback__option">
        <div class="swiper-button-prev feedback-button-prev">
            <img class="feedback-button__prev-img feedback_btn"
                src="{{ Vite::asset('resources/images/swiper/next.svg') }}" alt="play">
        </div>
        <div class="swiper-button-next feedback-button-next">
            <img class="feedback-button__next-img feedback_btn"
                src="{{ Vite::asset('resources/images/swiper/next.svg') }}" alt="play">
        </div>
    </div>
    </div>

</section>