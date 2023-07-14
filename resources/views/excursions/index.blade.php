@extends ("layouts.base")
@vite("resources/css/pages/excursions/excursions.css")
@vite("resources/js/pages/excursions/excursions.js")
@section('head')

@endsection
@section ("content")
@php

use App\Content\main\AboutGallery;
$aboutGallery = (new AboutGallery())->toArray();

@endphp
<section id="offer">
  <div class="offer__wrapper">
      <div class="offer__heading">
          <div class="offer__content">
              <h1 class="offer__title">Груповые экскурсии <br> по строящимся объектам и готовым объектам ФСК Малые этажи</h1>
              <h4 class="offer__text">ФСК Малые Этажи открывает запись на бесплатный групповой тур по нашим объектам. <br> Получите индивидуальные выгодные условия строительства в нашей компании.</h4>
              <div class="offer__buttons">
                  <button data-modal_id="modal__income" class="offer__main-button default__button">Записаться на экскурсию</button>
                  <button data-modal_id="modal__income" class="offer__secondary-button default__button">Получить консультацию</button>
              </div>
          </div>
          <div class="offer__img">
          </div>
      </div>
      
      <div class="offer__advantages">
          <div class="offer__advantage">
              <img class="offer__advantage-image" src="/landings/excursions/images/bus.svg">
              <span class="offer__advantage-text">Организованный трансфер до  объектов<br> ФСК Малые Этажи</span>
          </div>
          <div class="offer__advantage">
              <img class="offer__advantage-image" src="/landings/excursions/images/home.svg">
              <span class="offer__advantage-text">Экскурсия по объектам с опытными специалистами</span>
          </div>
          <div class="offer__advantage">
              <img class="offer__advantage-image" src="/landings/excursions/images/message.svg">
              <span class="offer__advantage-text">Консультация по технологиям, планировкам и ипотеке</span>
          </div>
          <div class="offer__advantage">
              <img class="offer__advantage-image" src="/landings/excursions/images/settings.svg">
              <span class="offer__advantage-text">Пообщаетесь с прорабом и строителями, оцените качество материалов</span>
          </div>
      </div>
  </div>
</section>
<section id="for-whom">
  <div class="for-whom__wrapper">
      <div class="for-whom__heading">
          <h2>Для кого эта экскурсия?</h2>
          <h4>СК «Малые Этажи» входит в группу компаний Tiksan Group — компания лидер в строительной и инженерной сфере. Мы заинтересованы в создании шедевра — Вашей загородной мечты, от этапа проектирования до вручения ключей.</h4>
      </div>
      <div class="for-whom__content">
          <div class="for-whom__row for-whom__row-first">
              <div class="for-whom__img for-whom__img-first"></div>
              <div class="for-whom__item">
                  <h3>Кто еще не выбрал подрядчика</h3>
                  <h4>Зададите любые интересующие вопросы</h4>
              </div>
              <div class="for-whom__item">
                  <h3>Кто хочет знать все этапы строительства</h3>
                  <h4>Подробно познакомитесь с технологией строительства</h4>
              </div>
          </div>
          <div class="for-whom__row for-whom__row-last">
              <div class="for-whom__item">
                  <h3>Кто сомневается в качестве строительства</h3>
                  <h4>Оцените качество материалов на стройплощадке</h4>
              </div>
              <div class="for-whom__img for-whom__img-last"></div>
          </div>
      </div>
  </div>
</section>

<section class="photo-gallery" id='gallery'>
  <div class="photo-wrapper">
      <div class="photo-header">
          <h1 class="photo-gallery__heading">
              {{__('Фотографии')}}

          </h1>
          <p class="photo-gallery__paraf">
              {{__('Узнайте больше о наших проектах через фотографии строящихся объектов. Посмотрите снимки наших
              малоэтажных домов на разных этапах строительства, чтобы увидеть, как мы превращаем идеи в
              реальность.')}}
          </p>
      </div>
      <div class="swiper photo-gallery__swiper">
          <div class="swiper-wrapper photo-gallery__wrapper">
              @foreach ($aboutGallery as $item) <div class="swiper-slide photo-gallery__slide">
                  <div class="photo-gallery__img" style="background-image: url({{$item}})">
                  </div>
              </div>
              @endforeach
          </div>
          <div class="swiper-pagination photo-pagination  photo-gallery__pagination">
          </div>
          <div class="photo-gallery__option">
              <div class="photo-gallery__button-prev">
                  <img class="photo-gallery-prev" src="{{ Vite::asset('resources/images/build/next.svg') }}"
                      alt="prev">
              </div>
              <div class="photo-gallery__button-next">
                  <img class="photo-gallery-next" src="{{ Vite::asset('resources/images/build/next.svg') }}"
                      alt="next">
              </div>
          </div>
      </div>
</section>
<section class="watch-this">
  <div class="watch-this__container">
    <h1 class="watch-this__heading">Смотрите как уже проходили экскурсии</h1>
    <div class="swiper watch-this__swiper">
      <div class="swiper-wrapper watch-this__wrapper">
        @for ($i = 0; $i < 5 ; $i++)
        <a data-fslightbox="gallery" class="swiper-slide watch-this__slide" href='{{ Vite::image('excursions/slider-1.jpg') }}' data-lg-size="1600-2400">Slide 1</a>
        @endfor     

      </div>
      <div class="swiper-button-prev watch-this__prev"></div>
      <div class="swiper-button-next watch-this__next"></div>
    </div>
  </div>
</section>
<section id="callback">
  <div class="callback__wrapper">
      <div class="callback__heading">
          <h2>Запишитесь <br>на групповую экскурсию</h2>
          <h4>С вами свяжется специалист по недвижимости, подтвердит выбранное время просмотра, организует посещение предложения и проведёт вам экскурсию.</h4>
      </div>
      <div class="callback__content">
          <div class="callback__text">
              <h4>Экскурсия проводится каждую субботу, записаться можете в форме записи ниже</h4>
          </div>
          <form class="callback__form">
              <input type="hidden" name="subject" value="Записаться на групповую экскурсию">
              <input class="callback__input" type="text" name="name" id="name" placeholder="Имя" required>
              <input class="callback__input" type="tel" name="phone" id="tel" placeholder="Телефон" required>
              <button class="callback__btn" type="submit" id="submit">Записаться на просмотр</button>
          </form>
          <a class="callback__approval" href="/">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <span>обработку персональных данных</span></a>
      </div>
      <div class="callback__content-hidden">
          <h1 class="callback__heading">Спасибо за заявку, мы вам перезвоним</h1>
      </div>
  </div>
</section>
@endsection