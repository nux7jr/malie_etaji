@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/blog/blog.js')
@vite('resources/css/pages/blog/blog.css')
@endsection

@section('content')

@php
use App\Content\main\Articles;
$articles_list = (new Articles())->toArray();
@endphp

<x-section.reels>
</x-section.reels>
<section class="blog-filter">

  <x-ui.path.path paths={!!json_encode($paths)!!}>
  </x-ui.path.path>

  <h1 class="blog-filter__heading">{{__('Блог')}}</h1>
  <div class="blog-filter__option">
    <button class="default__button blog-filter__button blog-filter__button-active">
      {{__('Все')}}
    </button>
    <button class="default__button blog-filter__button">
      {{__('Новости')}}
    </button>
    <button class="default__button blog-filter__button">
      {{__('Акции')}}
    </button>
    <button class="default__button blog-filter__button">
      {{__('Мероприятия')}}
    </button>
    <button class="default__button blog-filter__button">
      {{__('Статьи (СМИ)')}}
    </button>
    <button class="default__button blog-filter__button">
      {{__('Ипотека')}}
    </button>
    <button class="default__button blog-filter__button">
      {{__('Малые этажи')}}
    </button>
    <button class="default__button blog-filter__button">
      {{__('Полезное')}}
    </button>
  </div>
  <p class="blog-filter__info">{{__('Найдено') }} <span class="q-count">{{count($articles_list)}}</span>
    {{__('статей')}}</p>
</section>
<section class="article-list">
  <x-ui.lists.dropdown id="article-sort" name="article-sort">
    <?php
      $some_options = [
        'Сначала новые',
        'Сначала новые',
        'Сначала старые',
      ];
      ?>
    @foreach($some_options as $option)
    <x-ui.lists.option value="{{$option}}">
      {{$option}}
    </x-ui.lists.option>
    @endforeach
  </x-ui.lists.dropdown>
  <div class="article-list__wrapper">
    @foreach ($articles_list as $item)
    <x-cards.article info='{!! json_encode($item) !!}'>
    </x-cards.article>
    @endforeach
  </div>
  <div class="article-bottom__option">
    <button class="default__button article__more">Показать еще 15 из 102 статей</button>
    <button class="default__button article__up">Вернуться вверх</button>
  </div>
</section>
<section class="subscribe">
  <div class="subscribe__wrapper">

    <div class="subscribe__info">
      <h1 class="subscribe__heading">
        {{__('Подпишись на нашу рассылку, чтобы быть вкурсе всех новостей!')}}
      </h1>
      <p class="subscribe__paraf">
        {{__('Покупка дома — это серьезный и ответственный шаг, но мы поможем к нему подготовиться! Подпишитесь, чтобы
        получать информацию о самых полезных сервисах, выгодных предложениях и новостях компании «Малые этажи».')}}
      </p>
    </div>
    <div class="subscribe__form">
      <img class="subscribe__img" src="{{ Vite::asset('resources/images/order/content.jpg') }}" alt="call">
      <form class="sub-form">
        <x-ui.inputs.x-input class="sub-form__input sub-form" placeholder="Имя" name='name' type='text' required>
        </x-ui.inputs.x-input>
        <x-ui.inputs.x-input class="sub-form__input sub-form" placeholder="E-mail" name="email" type='email' required>
        </x-ui.inputs.x-input>

        <button type="submit" class="default__button sub-form">Подписаться</button>
      </form>
      <div class="sub__thx">Спасибо за подписку!</div>
      <div class="sub-details">
        <span class="sub-details__text">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <a
            class="sub-details__link" href="">обработку персональных
            данных</a></span>
        <span class="sub-details__text">Отменить подписку возможно в любой момент</span>
      </div>
    </div>
  </div>
</section>
{{-- <section class="article-bottom">
  <div class="article-list__wrapper">
    @foreach ($articles_list as $item)
    <x-cards.article data_info='{!! json_encode($item) !!}'>
    </x-cards.article>
    @endforeach
  </div>

</section> --}}
@endsection