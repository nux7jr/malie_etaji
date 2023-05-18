
@extends ("home.index")

@section('index.head')
@vite("resources/css/components/tech.css")

@endsection

@section("content.home")

<section class="tech">
  {{-- @vite("resources/css/components/tech.css") --}}
  <h1 class="tech__heading">Технологии, которые мы используем в строительстве</h1>
  <div class="tech__wrapper">
    <div class="tech__item tech-card">
      <div class="tech-card__header">
        <h1 class="tech-card__heading">SIP-панели</h1>
        <p class="tech-card__paraf">Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. 
          В то время некий безымянный печатник создал большую 
          коллекцию размеров и форм шрифтов.</p>
        </div>
        <div class="tech-card__img">
          <img class="tech-card__icon" src="{{ Vite::asset('resources/images/components/img.svg')}}" alt="">
        </div>
    </div>
    <div class="tech__item">

    </div>
  </div>
</section>

@endsection