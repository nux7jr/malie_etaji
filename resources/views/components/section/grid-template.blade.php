@push('head')
@once
@vite('resources/css/components/grid.css')
@endonce
@endpush



<section class="grid-temp">
  <div class="grid-temp__wrapper">
    <div class="grid-temp-x">
      @php
      $data = array(
      '1' => array('title' => 'Мы в СМИ', 'text' => 'Lorem Ipsum является стандартной "рыбой" для текстов на латинице с
      начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.', "link"
      => "somelink"),
      '2' => array('title' => 'Карьера', 'text' => 'Lorem Ipsum является стандартной "рыбой" для текстов на латинице с
      начала XVI века. ', "link"
      => "somelink"),
      '3' => array('title' => 'Блог', 'text' => 'Lorem Ipsum является стандартной "рыбой" для текстов на латинице с
      начала XVI века.', "link"
      => "somelink"),
      '4' => array('title' => 'Экскурсия по объекту', 'text' => 'Lorem Ipsum является стандартной "рыбой" для текстов на
      латинице с
      начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.', "link"
      => "kek")
      )
      @endphp


      @foreach ($data as $item)
      <article class="grid-card">
        <h1 class="grid-card__heading">{{$item["title"]}}</h1>
        <p class="grid-card__paraf">
          {{$item["text"]}}
        </p>
        <a href="" class="grid-card__button">
          <img class="grid-card__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}"
            alt="card-img">
        </a>
      </article>
      @endforeach
    </div>
    <div class="grid-temp-z">
      <div class="z-card__header">
        <h1 class="z-card__heading">
          Скидки и промокоды от наших партнеров
        </h1>
        <p class="z-card__text">Lorem Ipsum является стандартной "рыбой" для текстов.</p>
      </div>
      <img class="z-card__img" src="https://placehold.co/191x191" alt="logo-card">
      <a href="/" class="default__button z-card__link">Узнать больше</a>
    </div>
  </div>
</section>