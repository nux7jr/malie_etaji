@push('head')
@once
@vite("resources/css/components/article.css")

@endonce
@endpush


@php
$data = json_decode($info, true);
@endphp
<article class="article-item @foreach ($data['tags'] as $item) {{ $item }} @endforeach ">
  <div class="article__info">
    <h1 class="article__heading">{{$data['title']}}</h1>
    <p class="article__paraf">
      {{$data['preview']}}
    </p>
    <time class="article__time" datetime="{{ $data['date'] }}">{{ $data['date'] }} </time>
  </div>
  <a class="article__link" href="/blog/{{ $data['id'] }}">
    <img class="article__img" src="{{ Vite::image('icons/offer_arr_red.svg') }}" alt="link">
  </a>
</article>