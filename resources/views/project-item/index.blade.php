@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/project-item/project-item.js')
@vite('resources/css/pages/project-item/project-item.css')
@endsection

@section('content')
<div class="swiper project-item__swiper">
  <x-ui.path.path paths={!!json_encode($paths)!!} class="project-item__path"></x-ui.path.path>
  <div class="swiper-wrapper project-item__wrapperes">
    @for ($i = 0; $i < 10; $i++) <div class="swiper-slide project-item__slide"
      style="background-image: url('{{ Vite::asset('resources/images/project-item/big.jpg') }}')">
  </div>
  @endfor
</div>
<div class="swiper-button-prev project-item__prev"></div>
<div class="swiper-button-next project-item__next"></div>

</div>
<section class="project-info">
  <div class="project-info__header header-section">
    <div class="header-section__asd">
      <p class="header-section__placenamer">
        {{__('Дом')}}
      </p>
      <h2 class="header-section__name">
        {{__('ДВ13-93')}}</h2>
    </div>
    <div class="header-section__item">
      <div class="header-section__price">
        <p class="header-section__about">
          {{__('Цена под отделку')}}
          <button class="tooltip">
            <img class="toltip-button__img" src="{{ Vite::asset('resources/images/components/toltip.svg') }}"
              alt="toltip">
            <span class="tooltiptext">
              {{ __(' Tooltip text') }}
            </span>
          </button>
        </p>
        <h1 class="header-section__value">
          {{__('4 500 000 ₽')}}
        </h1>
      </div>
      <div class="header-section__price">
        <p class="header-section__about">
          {{__('Цена под отделку')}}
          <button class="tooltip">
            <img class="toltip-button__img" src="{{ Vite::asset('resources/images/components/toltip.svg') }}"
              alt="toltip">
            <span class="tooltiptext">
              {{ __(' Tooltip text') }}
            </span>
          </button>
        </p>
        <h1 class="header-section__value">
          {{__('4 500 000 ₽')}}
        </h1>
      </div>
    </div>
  </div>
  <div class="project-settings">
    @for ($i = 0; $i < 6; $i++) <div class="project-settings__card">
      <h1 class="project-settings__header">
        {{__('2')}}
      </h1>
      <p class="project-settings__name">{{__('площадь')}}</p>
  </div>
  @endfor
  </div>
  <hr class="project-hr">
  <div class="about-project">
    <div class="about-project__text">
      <h1 class="about-project__h1">
        {{__('О проекте')}}
      </h1>
      <div class="about-project__text-wrapper">
        <p class="about-project__paraf">
          {{__('Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
          стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал
          большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не
          только
          успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.')}}
        </p>
        <p class="about-project__paraf">
          {{__('Lorem Ipsum - это
          текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов
          на
          латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм
          шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных
          изменений пять веков, но и перешагнул в электронный дизайн.')}}
        </p>
      </div>
      <div class="about-project__option">
        <button class="about-project__button default__button">
          <img class="about-project__button-img" src="{{ Vite::asset('resources/images/icons/download.svg') }}"
            alt="download">
          {{__('Скачать проект бесплатно')}}
          <span></span>
        </button>
        <button class="about-project__mach default__button">
          {{__('Рассчитать ипотеку')}}

        </button>
      </div>
    </div>
    <div class="about-project__list">
      <div class="swiper about-project__swiper">
        <div class="swiper-wrapper about-project__wrapper">
          @for ($i = 0; $i < 10; $i++) <div class="swiper-slide about-project__slide">
            <div class="about__image" style="background-image: url(https://placehold.co/600x400)"></div>
        </div>
        @endfor
      </div>
      <div class="swiper-pagination about-project__pagination"></div>
    </div>
  </div>
  </div>
</section>
<section class="project-preview">
  <div class="project-preview__option">
    <button class="default__button project-preview__button project-preview__button-active">
      {{__('Планировка')}}</button>
    <button class="default__button project-preview__button">{{__('С мебелью')}}</button>
    <button class="default__button project-preview__button">{{__('Фасад')}}</button>
    <button class="default__button project-preview__button">{{__('3D-визуализация')}}</button>
  </div>
  <div class="project-preview__wrapper">
    <div class="project-preview__item plan"
      style="background-image: url('{{ Vite::asset('resources/images/project-item/plan.jpg') }}')">
    </div>
  </div>
  <div class="change-plan">
    <div class="change-plan__text">
      <h2 class="change-plan__header">{{__('Хотите изменить планировку?')}}</h2>
      <p class="change-plan__paraf">{{__('Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
        Lorem Ipsum является
        стандартной
        "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию
        размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил
        без заметных изменений пять веков, но и перешагнул в электронный дизайн.')}}</p>
    </div>
    <button class="default__button">{{__('Отправить заявку')}}</button>
  </div>
</section>
<section class="peculiarities">
  <h1 class="peculiarities__heading">

    {{__('Особенности проекта')}}
  </h1>
  <div class="peculiarities__wrapper">
    <div class="peculiarities__head">
      <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
        <p class="peculiarities__paraf">
          {{__('Качественный сервис и широта спектра услуг')}}
        </p>
      </div>
      <div class="peculiarities__list">
        <div class="peculiarities__card flex-one" style="background-image: url(https://placehold.co/600x400)">
          <p class="peculiarities__paraf">{{__('Просторный дом и доступная цена')}}</p>
        </div>
        <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
          <p class="peculiarities__paraf">{{__('Удобная покупка и быстрая сдача')}}</p>
        </div>
        <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
          <p class="peculiarities__paraf">{{__('Панорамное остекление')}}</p>
        </div>
        <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
          <p class="peculiarities__paraf">{{__('Современные планировки')}}</p>
        </div>
      </div>
    </div>
    <div class="peculiarities__body">
      <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
        <p class="peculiarities__paraf">{{__('Расположение и инфраструктура')}}</p>
      </div>
      <div class="peculiarities__card" style="background-image: url(https://placehold.co/600x400)">
        <p class="peculiarities__paraf">{{__('Качественный сервис и широта спектра услуг')}}</p>
      </div>
    </div>
  </div>
  <form class="project-review">
    <div class="project-review__info">
      <h1 class="project-review__heading">{{__('Запланируйте просмотр объекта')}}</h1>
      <p class="project-review__paraf">{{__('С вами свяжется специалист по недвижимости, подтвердит выбранное время
        просмотра, организует посещение предложения и проведёт вам экскурсию.')}}</p>
    </div>
    <div class="project-review__datepiker datepiker">
      <h1 class="datepiker__heading">{{__('Выберите дату и время')}}</h1>
      <div class="datepiker__list-inputs">
        <div class="datepiker__list">
          <input class="datepiker__input" type="radio" name="day" value="now" id="now">
          <label class="datepiker__label" for="now">
            <span class="datepiker__title">Сегодня</span>
            <span class="datepiker__day">1 мая</span>
          </label>
        </div>
        <div class="datepiker__list">
          <input class="datepiker__input" type="radio" name="day" value="now1" id="now1">
          <label class="datepiker__label" for="now1">
            <span class="datepiker__title">Завтра</span>
            <span class="datepiker__day">1 мая</span>
          </label>
        </div>
        <div class="datepiker__list">
          <input class="datepiker__input" type="radio" name="day" value="now2" id="now2">
          <label class="datepiker__label" for="now2">
            <span class="datepiker__title">Сегодня</span>
            <span class="datepiker__day">1 мая</span>
          </label>
        </div>
        <div class="datepiker__list">
          <input class="datepiker__input" type="radio" name="day" value="now2" id="now3">
          <label class="datepiker__label" for="now3">
            <span class="datepiker__title">Сегодня</span>
            <span class="datepiker__day">1 мая</span>
          </label>
        </div>
        <div class="datepiker__list">
          <input class="datepiker__input" type="radio" name="day" value="now2" id="now4">
          <label class="datepiker__label" for="now4">
            <span class="datepiker__title">Сегодня</span>
            <span class="datepiker__day">1 мая</span>
          </label>
        </div>
        <div class="datepiker__list">
          <input class="datepiker__input" type="radio" name="day" value="now2" id="now5">
          <label class="datepiker__label" for="now5">
            <span class="datepiker__title">Сегодня</span>
            <span class="datepiker__day">1 мая</span>
          </label>
        </div>
      </div>

      <div class="datepiker__option">
        <x-ui.lists.dropdown class="datepiker__dropdown" id="datepiker" name="datepiker">
          <?php
                $short_setting = [
                    'не выбранно',
                    'Как можно быстрее',
                    'Как можно дольше'];
                ?>
          @foreach($short_setting as $method)
          <x-ui.lists.option value="{{$method}}">
            {{$method}}
          </x-ui.lists.option>
          @endforeach
        </x-ui.lists.dropdown>
      </div>
      <div class="datepiker__user-info">
        <div class="datepiker__user-info__wrapper">
          <x-ui.inputs.x-input class="user-info__item" placeholder="Имя" name='name'>
          </x-ui.inputs.x-input>
          <x-ui.inputs.x-input class="user-info__item" placeholder="Телефон" name='phone'>
          </x-ui.inputs.x-input>
          <button type="submit" class="default__button user-info__item">
            Записаться на просмотр
          </button>
        </div>
        <p class="datepiker__policy">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <a href="http://"
            target="_blank" rel="noopener noreferrer"> обработку персональных данных</a></p>
      </div>
    </div>
  </form>

</section>
<x-cards.house-card class="project-mortgage">
</x-cards.house-card>
<section class="project-mortgage">
  <h1 class="project-mortgage__heading">
    {{__('Ипотечные программы')}}
  </h1>
  <div class="project-mortgage__container">
    <div class="swiper project-mortgage__swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper project-mortgage__wrapper">
        <!-- Slides -->
        @for ($i = 0; $i < 8; $i++) <div class="swiper-slide project-mortgage__slide">
          <div class="project-mortgage__inner">
            <h1 class="project-mortgage__h1">
              {{__('от 3,5% для IT- специалистов')}}
            </h1>
            <a href="/mortgage" class="default__button project-mortgage__link">
              {{__('Узнать больше')}}
            </a>
          </div>
      </div>
      @endfor
    </div>
  </div>
  <div class="swiper-button-prev project-mortgage__prev"></div>
  <div class="swiper-button-next project-mortgage__next"></div>
  </div>
</section>
<section class="stability">
  <div class="stability__header">
    <h1 class="stability__heading">
      {{__('Почему “Малые этажи” стабильная компания?')}}
    </h1>
    <p class="stability__paraf">
      {{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
      безымянный
      печатник создал большую коллекцию размеров и форм шрифтов.')}}
    </p>
  </div>
  <div class="stability__wrapper">
    @for ($i = 0; $i < 4; $i++) <article class="stability-card">
      <h2 class="stability-card__heading">
        <span class="stability-card__big">
          {{__('20')}}
        </span>
        {{__('построенных домов')}}
      </h2>
      <p class="stability-card__paraf">{{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала
        XVI века. ')}}</p>
      </article>
      @endfor
  </div>
</section>


<x-section.office-map>
</x-section.office-map>
{{-- <section class="office-map">
  <h1 class="office-map__heading">
    {{__('Офис продаж')}}
  </h1>
  <div class="office-map__container">
    <div style="position:relative;overflow:hidden;"><a
        href="https://yandex.ru/maps/org/malyye_etazhi/181477490988/?utm_medium=mapframe&utm_source=maps"
        style="color:#eee;font-size:12px;position:absolute;top:0px;">Малые этажи</a><a
        href="https://yandex.ru/maps/62/krasnoyarsk/category/construction_company/184107633/?utm_medium=mapframe&utm_source=maps"
        style="color:#eee;font-size:12px;position:absolute;top:14px;">Строительная компания в Красноярске</a><a
        href="https://yandex.ru/maps/62/krasnoyarsk/category/prefabricated_buildings/184107425/?utm_medium=mapframe&utm_source=maps"
        style="color:#eee;font-size:12px;position:absolute;top:28px;">Быстровозводимые здания в Красноярске</a><iframe
        id="map-frame"
        src="https://yandex.ru/map-widget/v1/?ll=92.923116%2C56.036678&mode=search&oid=181477490988&ol=biz&sctx=ZAAAAAgBEAAaKAoSCQ9fJoqQNldAERnG3SBaAUxAEhIJTl5kAn6N3z8RkzZV98jmxD8iBgABAgMEBSgKOABAPkgBagJydZ0BzcxMPaABAKgBAL0ByTL3MsIBBqyCm4ekBeoBAPIBAPgBAIICFdC80LDQu9GL0LUg0Y3RgtCw0LbQuIoCAJICAJoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=92.923116%2C56.036678&sspn=0.015407%2C0.005099&text=%D0%BC%D0%B0%D0%BB%D1%8B%D0%B5%20%D1%8D%D1%82%D0%B0%D0%B6%D0%B8&z=17"
        width="100%" height="700" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
  </div>
</section> --}}


<section class="more-projects">
  <div class="more-projects__header">
    <h1 class="more-projects__heading">{{ __('Похожие проекты') }}</h1>
    <a class="default__button" href="projects">
      {{__('Все проекты')}}
    </a>
  </div>
  <div class="more-projects__wrapper">
    @for ($i = 0; $i < 3; $i++) <x-cards.project-item class="more-projects__item">
      </x-cards.project-item>
      @endfor
  </div>
</section>


@endsection
{{-- @for ($i = 0; $i < 8; $i++) --}} {{-- @endfor --}}