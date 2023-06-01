@push('head')
@once
@vite("resources/css/components/article.css")

@endonce
@endpush



<article class="article-item">
  <div class="article__info">
    <h1 class="article__heading">{{__('Название статьи')}}</h1>
    <p class="article__paraf">{{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
      В то время некий
      безымянный
      печатник создал большую коллекцию размеров и форм шрифтов.')}}</p>
    <time class="article__time" datetime="15.05.2025">{{__('15.05.2025')}}</time>
  </div>
  <a class="article__link" href="/blog/229">
    <img class="article__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="link">
  </a>
</article>