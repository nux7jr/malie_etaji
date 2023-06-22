@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/blog-item/blog-item.js')
@vite('resources/css/pages/blog-item/blog-item.css')
@endsection

@php


use Illuminate\View\Compilers\BladeCompiler;
use App\Content\main\Articles;
$articles_list = new Articles();




@endphp

@section('content')

<section class="blog-item">
  <x-ui.path.path paths={!!json_encode($paths)!!}>
  </x-ui.path.path>
  @php
  echo BladeCompiler::render($articlesInfo['html'])
  @endphp
</section>

<section class="article-bottom">
  <h1 class="article-bottom__heading">Смотрите также</h1>
  <div class="article-list__wrapper">
    @php
    $output = Articles::$card_elements->slice(0, 4);
    @endphp
    @foreach ($output as $item)
    <x-cards.article info='{!! json_encode($item) !!}'>
    </x-cards.article>
    @endforeach
  </div>
  <div class="article-bottom__option">
    <a href="/blog" class="default__button article-bottom__link">Смотреть все статьи</a>
  </div>
</section>

@endsection