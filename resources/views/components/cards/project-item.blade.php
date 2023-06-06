@push('head')
@once
@vite('resources/css/components/project-item.css')
@endonce
@endpush

{{-- @for ($i = 0; $i < 3; $i++) --}} {{-- @endfor --}} {{-- <div
    style="background-image: url(https://placehold.co/500x380)" class="project-slide__img">
    </div> --}}
    <article class="project-item">
        @php
        $info = json_decode($info, true);
        @endphp
        <div class="swiper project-swiper">
            <div class="swiper-wrapper">
                @foreach ($info['big_slider_images'] as $item)
                <div class="swiper-slide">
                    <div class="project-slide" style="background-image: url({{ $item }})"></div>
                </div>
                @endforeach

            </div>
            <div class="swiper-pagination pagination-swiper"></div>
        </div>

        <div class="project-item__wrapper {{ isset($theme) ? $theme : "" }}">
            <div class="project-item__info">
                <h2 class="project-item__heading">
                    {{$info["name"]}}
                </h2>
                <p class="project-item__price">{{$info["price_small"]}}</p>
            </div>
            <hr class="project-item__hr" />
            <div class="project-item__hidden">
                <div class="house-info">
                    <p class="house-info__paraf">{{$info['item_info']['square']}} м2</p>
                    <p class="house-info__paraf">{{$info['item_info']['bedrooms']}} комнат</p>
                    <p class="house-info__paraf">{{$info['item_info']['bathrooms']}} санузел</p>
                    <p class="house-info__paraf">{{$info['item_info']['floors']}} этажа</p>
                </div>
                <div class="house-tag">
                    @foreach ($info['tags'] as $item)
                    <p class="house-tag__item"> {{$item}} </p>
                    @endforeach
                </div>
            </div>
            <hr class="project-item__hr" />
            <div class="project-item__option">
                <a class="default__button" href="/projects/228">{{ __('Подробнее') }}</a>
                <button class="default__button project-item__call">{{ __('Хочу такой дом') }}</button>
            </div>
        </div>
    </article>