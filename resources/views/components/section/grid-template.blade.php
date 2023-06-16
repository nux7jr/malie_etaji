@push('head')
@once
@vite('resources/css/components/grid.css')
@endonce
@endpush



<section class="grid-temp">
  <div class="grid-temp__wrapper">
    <div class="grid-temp-x">
      @php
      $data = [
      '1' => ['title' => 'Смотреть проекты',
      'text' => 'Посмотрите коллекцию готовых проектов домов, представленных в этом разделе, и найдите идеальное решение
      для своего будущего жилья.',
      "link" => "/projects"],
      '2' => ['title' => 'Карьера',
      'text' => 'Присоединяйтесь к нашей команде и откройте для себя возможности для развития в нашей компании.',
      "link" => "https://krasnoyarsk.hh.ru/employer/895977"],
      '3' => ['title' => 'Блог',
      'text' => 'Будьте вкурсе наших последних новостей и акций. Читайте познавательные статьи и что пишут о нас СМИ.',
      "link" => "/blog"],
      '4' => ['title' => 'Экскурсия по объекту',
      'text' => 'Запишитесь на экскурсию по нашему строящемуся объекту, чтобы лично увидеть наши малоэтажные дома в
      деталях и задать вопросы по строительству.',
      "link" => "/"],
      ]
      @endphp


      @foreach ($data as $item)
      <article class="grid-card">
        <h1 class="grid-card__heading">{{$item['title']}}</h1>
        <p class="grid-card__paraf">
          {{$item['text']}}
        </p>
        <a href="{{$item['link']}}" class="grid-card__button">
          <img class="grid-card__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
            alt="card-img">
        </a>
      </article>
      @endforeach
    </div>
    <div class="grid-temp-z">
      <div class="z-card__header">
        <h1 class="z-card__heading">
          Live-трансляция строительства
        </h1>
        <p class="z-card__text">Вы можете увидеть в режиме реального времени как строятся объекты, как создаются
          SIP-панели на производстве и как работают наши специалисты.</p>
      </div>
      <img class="z-card__img" src="{{ Vite::asset('resources/images/about/img.png') }}" alt="logo-card">
      <a href="/" class="default__button z-card__link">Узнать больше</a>
    </div>
  </div>
</section>