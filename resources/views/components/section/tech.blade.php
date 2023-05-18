@push('head')
    @once
        @vite("resources/css/components/tech.css")
    @endonce
@endpush


<section class="tech">
  <h1 class="tech__heading">
    {{__('Технологии, которые мы используем в строительстве')}}
    </h1>
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
        <button class="default__button tech-card__button">
          {{__('Узнать больше')}}
        </button>
    </div>
    <div class="nap-wrapper">
      <div class="small-card normal-card">
        <h1 class="small-card__heading">
          {{__('Теплые полы')}}
          
        </h1>
        <p class="small-card__text">
          {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.')}}</p>
        <a class="small-card__link" href="http://" target="_blank" rel="noopener noreferrer">
          <img class="small-card__img" src="{{ Vite::asset('/resources/images/icons/offer_arr_red.svg')}}" alt="">
        </a>
      </div>
      <div class="small-card normal-card">
        <h1 class="small-card__heading">
          {{__('Фундамент')}}
        </h1>
        <p class="small-card__text">
          {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.')}}</p>
        <a class="small-card__link" href="http://" target="_blank" rel="noopener noreferrer">
          <img class="small-card__img" src="{{ Vite::asset('/resources/images/icons/offer_arr_red.svg')}}" alt="">
        </a>
      </div>
      <div class="small-card smalls-card">
        <h1 class="small-card__heading">
          {{__('Котлы')}}
        </h1>
        <p class="small-card__text">
          {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. ')}}</p>
        <a class="small-card__link" href="http://" target="_blank" rel="noopener noreferrer">
          <img class="small-card__img" src="{{ Vite::asset('/resources/images/icons/offer_arr_red.svg')}}" alt="">
        </a>
      </div>
      <div class="small-card long-card">
        <h1 class="small-card__heading">
          {{__('Нанофильтры для окон')}}
        </h1>
        <p class="small-card__text">
          {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.')}}</p>
        <a class="small-card__link" href="http://" target="_blank" rel="noopener noreferrer">
          <img class="small-card__img" src="{{ Vite::asset('/resources/images/icons/offer_arr_red.svg')}}" alt="">
        </a>
      </div>
    </div>
  </div>
</section>
