@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/blog-item/blog-item.js')
@vite('resources/css/pages/blog-item/blog-item.css')
@endsection

@section('content')

<section class="blog-item">
  <x-ui.path.path paths={!!json_encode($paths)!!}>
  </x-ui.path.path>

  <h1 class="blog-item__heading">Название статьи</h1>
  <time class="blog-item__time" datetime="15.05.2023">15.05.2023</time>
  <img class="blog-item__img" src="{{ Vite::asset('resources/images/order/content.jpg') }}" alt="call">
  <p class="blog-item__text">
    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой"
    для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
    форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных
    изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация
    листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа
    Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
  </p>
  <p class="blog-item__text--red">
    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой"
    для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
    форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных
    изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация
    листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа
    Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
  </p>
  <p class="blog-item__text">
    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой"
    для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
    форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных
    изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация
    листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа
    Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
  </p>
  <button class="default__button blog-item__call">
    Оставить заявку
  </button>
</section>

<section class="article-bottom">
  <h1 class="article-bottom__heading">Смотрите также</h1>
  <div class="article-list__wrapper">
    @for ($i = 0; $i < 4; $i++) <x-cards.article>
      </x-cards.article>
      @endfor
  </div>
  <div class="article-bottom__option">
    <a href="/blog" class="default__button article-bottom__link">Смотреть все статьи</a>
  </div>
</section>

@endsection