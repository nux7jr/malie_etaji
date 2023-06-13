@push('head')
@once
@vite('resources/css/components/aboutHeader.css')
@endonce
@endpush
@php
use App\Content\main\AboutHeading;
$about_heading = new AboutHeading();
$format_info = $about_heading->toArray();
@endphp

<section class="about">
    <x-ui.path.path paths="{!! $paths !!}">
    </x-ui.path.path>
    <div class="about__wrapper">
        <div class="about-slogan">
            <div class="about-slogan__wrapper">
                <h1 class="about-slogan__heading">{{$format_info['heading']}}</h1>
                <p class="about-slogan__text">
                    {{ $format_info['text'] }}
                </p>
                <img class="about-image--mobile" src="{{ $format_info['image'] }}" alt="house">

            </div>
            <div class="about-router">
                @foreach ($format_info['links_list'] as $item)
                <div class="about-router__item">
                    <a href="{{$item['link']}}" class="about-router__link">
                        <span>
                            {{ $item['text'] }}</span>
                        <img class="about-router__img"
                            src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="icon">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <img class="about-image" src="{{ $format_info['image'] }}" alt="house">
    </div>
</section>