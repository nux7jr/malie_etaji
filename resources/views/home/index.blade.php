@extends ("layouts.base")
@vite("resources/css/pages/home/home.css")
@vite("resources/js/pages/home/home.js")
@section('head')

@endsection
@section ("content")
    <section class="offer">
        <div class="main-offer offer-swiper swiper">
          <div class="offer-wrapper swiper-wrapper">
            <div class="offer-slide swiper-slide">
              <div class="offer-slider__inner">
                <h1 class="main-offer__heading">{{__('Оффер')}}</h1>
                <p class="main-offer__paraf"> {{__('Lorem Ipsum является стандартной "рыбой" для текстов 
                на латинице с начала XVI века. В то время некий 
                безымянный печатник создал большую коллекцию размеров 
                и форм шрифтов.')}}</p>
            <button class="default__button main-offer__button">{{__('Узнать больше')}}</button>
          </div>
        </div>
            <div class="offer-slide swiper-slide">
              <div class="offer-slider__inner">
                <h1 class="main-offer__heading">{{__('Оффер')}}</h1>
                <p class="main-offer__paraf"> {{__('Lorem Ipsum является стандартной "рыбой" для текстов 
                на латинице с начала XVI века. В то время некий 
                безымянный печатник создал большую коллекцию размеров 
                и форм шрифтов.')}}</p>
            <button class="default__button main-offer__button">{{__('Узнать больше')}}</button>
          </div>
        </div>
            <div class="offer-slide swiper-slide">
                <div class="offer-slider__inner">
                  <h1 class="main-offer__heading">{{__('Оффер')}}</h1>
                  <p class="main-offer__paraf"> {{__('Lorem Ipsum является стандартной "рыбой" для текстов 
                  на латинице с начала XVI века. В то время некий 
                  безымянный печатник создал большую коллекцию размеров 
                  и форм шрифтов.')}}</p>
              <button class="default__button main-offer__button">{{__('Узнать больше')}}</button>
            </div>
          </div>
        </div>
        <div class="swiper-pagination offer-slide__pagination"></div>
        </div>
       <div class="offer__wrapper">
        <div class="sec-offer">
          <h1 class="sec-offer__heading">{{__('Оффер')}}</h1>
          <p class="sec-offer__paraf">{{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.')}}</p>
          <button class="sec-offer__button">
            <img class="sec-offer__img" src="/images/icons/offer_arr.svg" alt="offer">
          </button>
        </div>
        <div class="sec-offer">
          <h1 class="sec-offer__heading">{{__('Оффер')}}</h1>
          <p class="sec-offer__paraf">{{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов.')}}</p>
          <button class="sec-offer__button">
            <img class="sec-offer__img" src="/images/icons/offer_arr.svg" alt="offer">
          </button>
        </div>
       </div>

      
        {{-- <div class="swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-scrollbar"></div>
        </div>
        <hr />
        <div class="map-container">
        </div> --}}
        {{-- <x-ui.buttons.button class="someclass" type="sumbit" message="Узнать больше" ></x-ui.buttons.button> --}}
        {{-- <script src="https://api-maps.yandex.ru/3.0/?apikey=<API-ключ>&lang=ru_RU"></script> --}}
        {{-- <script src="https://api-maps.yandex.ru/2.1/?apikey=8a5d8b7a-70b0-42fd-9967-2a17d163ce055&lang=ru_RU"></script> --}}
    </section>
    <section class="which-house">
      <h1 class="which-house__heading">
        {{__('Какие дома мы строим')}}
      </h1>
      
      <div class="which-house__wrapper">
        @for ($i = 0; $i < 6; $i++)
        <x-ui.cards.autoplay>
        </x-ui.cards.autoplay>
        @endfor
      </div>
    </section>
@endsection

