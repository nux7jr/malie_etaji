@push('head')
@once
@vite('resources/css/components/project-item.css')
@endonce
@endpush

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
                <p class="house-info__paraf">{{$info['formated_info']['bedrooms']}}</p>
                <p class="house-info__paraf">{{$info['formated_info']['bathrooms']}}</p>
                <p class="house-info__paraf">{{$info['formated_info']['floors']}}</p>
            </div>
            <div class="house-tag">
                @foreach ($info['tags'] as $item)
                <p class="house-tag__item"> {{$item}} </p>
                @endforeach
            </div>
        </div>
        <hr class="project-item__hr" />
        <div class="project-item__option">
            <a class="default__button" href="/projects/{{$info['id']}}">{{ __('Подробнее') }}</a>
            <button data-modal_id="modal__income" data-ym="hochu_dom" class="default__button project-item__call">{{
                __('Хочу такой дом')
                }}</button>
        </div>
    </div>
</article>