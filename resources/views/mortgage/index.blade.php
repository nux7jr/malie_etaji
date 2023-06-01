@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/mortgage/mortgage.js')
@vite('resources/css/pages/mortgage/mortgage.css')
@endsection

@section('content')
<section class="mortgage">
  <x-ui.path.path paths={!!json_encode($paths)!!} class="mortgage__path"></x-ui.path.path>
  <div class="mortgage__wrapper">
    <h1 class="mortgage__heading">{{__('Заголовок')}}</h1>
    <p class="mortgage__paraf">{{__('С нами построили дом по ипотеке уже')}} <span class="mortgage__paraf--red">{{__('1
        304 человека')}}</span> </p>
    <p class="mortgage__paraf">
      {{__('СК «Малые Этажи» входит в группу компаний Tiksan Group — компания лидер в строительной и околостроительной
      сфере.
      Мы заинтересованы в создании шедевра — Вашей загородной мечты, от этапа проектирования до вручения ключей.')}}
    </p>
  </div>
  <div class="mortgage__option">
    <a href="#calc" class="default__button">
      {{__('Калькулятор ипотеки')}}
    </a>
    <a href="" class="default__button">
      {{__('Получить консультацию')}}
    </a>
  </div>
  <div class="mortgage-list">
    @php
    $mortgage_list = array("Выберите проект дома на нашем сайте", "Получите одобрение через нашего специалиста по
    ипотеке", "Подпишите договор на строительство и кредитный договор", 'Дождитесь получения ключей — заезжайте и
    живите');
    @endphp
    @foreach ($mortgage_list as $key => $item)
    <div class="mortgage-list__item">
      <h1 class="mortgage-list__heading">
        {{$key + 1}}</h1>
      <p class="mortgage-list__paraf">
        {{$item}}
      </p>
    </div>
    @endforeach
  </div>
</section>
<section class="mortgage-prog" id="mortgage-programs">
  <div class="mortgage-prog__wrapper">
    <h1 class="mortgage-prog__heading">{{__('Ипотечные программы')}}</h1>
    <div class="mortgage-prog__option">
      <button class="default__button mortgage-prog__button--first mortgage-prog__button {{ $filter === 'family' ? 'mortgage-prog__button-active'
        : "" }}" data-filter="family">
        {{__('Семейная')}}
      </button>
      <button class="default__button mortgage-prog__button {{ $filter === 'capital' ? 'mortgage-prog__button-active'
      : "" }}" data-filter="capital">
        {{__('Под материнский капитал')}}
      </button>
      <button class="default__button mortgage-prog__button {{ $filter === 'gos' ? 'mortgage-prog__button-active'
      : "" }}" data-filter="gos">
        {{__('Господдержка')}}
      </button>
      <button class="default__button mortgage-prog__button {{ $filter === 'it' ? 'mortgage-prog__button-active'
      : "" }}" data-filter="it">
        {{__('IT-ипотека')}}
      </button>
      <button class="default__button mortgage-prog__button {{ $filter === 'away' ? 'mortgage-prog__button-active'
      : "" }}" data-filter="away">
        {{__('Дальневосточная')}}
      </button>
      <button class="default__button mortgage-prog__button {{ $filter === 'installment' ? 'mortgage-prog__button-active'
      : "" }}" data-filter="installment">
        {{__('Рассрочка')}}
      </button>
      <button class="default__button mortgage-prog__button {{ $filter === 'military' ? 'mortgage-prog__button-active'
      : "" }}" data-filter="military">
        {{__('Военная')}}
      </button>
    </div>
    <div class="mortgage-prog__content">
      <div class="mortgage-prog__section family-content mortgage-prog__first">
        <img class="mortgage-prog__img" src="https://placehold.co/600x400" alt="prgramm">
        <div class="mortgage-prog__info">
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

          </p>
        </div>
      </div>
      <div class="mortgage-prog__section capital-content mortgage-prog__first">
        <img class="mortgage-prog__img" src="https://placehold.co/600x400" alt="">
        <div class="mortgage-prog__info">
          <p class="mortgage-prog__paraf">
            Сapital Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
            стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

          </p>
        </div>
      </div>
      <div class="mortgage-prog__section gos-content mortgage-prog__first">
        <img class="mortgage-prog__img" src="https://placehold.co/600x400" alt="">
        <div class="mortgage-prog__info">
          <p class="mortgage-prog__paraf">
            Сapital Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
            стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

          </p>
        </div>
      </div>
      <div class="mortgage-prog__section it-content mortgage-prog__first">
        <img class="mortgage-prog__img" src="https://placehold.co/600x400" alt="">
        <div class="mortgage-prog__info">
          <p class="mortgage-prog__paraf">
            Сapital Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
            стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

          </p>
        </div>
      </div>
      <div class="mortgage-prog__section away-content mortgage-prog__first">
        <img class="mortgage-prog__img" src="https://placehold.co/600x400" alt="">
        <div class="mortgage-prog__info">
          <p class="mortgage-prog__paraf">
            Сapital Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
            стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

          </p>
        </div>
      </div>
      <div class="mortgage-prog__section tranches-content mortgage-prog__first">
        <img class="mortgage-prog__img" src="https://placehold.co/600x400" alt="">
        <div class="mortgage-prog__info">
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

          </p>
        </div>
      </div>
      <div class="mortgage-prog__section installment-content mortgage-prog__first">
        <img class="mortgage-prog__img" src="https://placehold.co/600x400" alt="">
        <div class="mortgage-prog__info">
          <p class="mortgage-prog__paraf">
            Installment Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
            стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

          </p>
        </div>
      </div>
      <div class="mortgage-prog__section military-content mortgage-prog__first">
        <img class="mortgage-prog__img" src="https://placehold.co/600x400" alt="">
        <div class="mortgage-prog__info">
          <p class="mortgage-prog__paraf">
            military Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
            стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
          </p>
          <p class="mortgage-prog__paraf">
            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
            "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
            коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
            успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в
            новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее
            время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<x-cards.house-card>
</x-cards.house-card>
<x-section.order class="mortgage__call">
</x-section.order>
<section class="adv">
  <h1 class="adv__heading">
    {{__('Преимущества ипотеки от “Малых этажей”')}}
  </h1>
  <div class="adv__section">

    <div class="adv__wrapper">
      <div class="adv__list">
        <div class="adv-card adv-card--first">

        </div>
        @for ($i = 0; $i < 4; $i++) <div class="adv-card">
          <h1 class="adv-card__heading">{{__('Lorem Ipsum')}}</h1>
          <p class="adv-card__paraf">{{__('Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI
            века.')}}</p>
      </div>
      @endfor
      <div class="adv-card adv-card--last">

      </div>
    </div>
    <div class="adv-person">
      <img class="adv-person__img" src="https://placehold.co/360x530" alt="person">
      <h1 class="adv-person__name">Анастасия Громовая</h1>
      <p class="adv-person__text">Ваш персональный ипотечный брокер</p>
    </div>
  </div>
  <div class="adv-call">
    <a href="http://" class="adv-call__link">
      <span class="adv-call__text">Нет участка? <br /> Подберем с вами идеальный вариант</span>
      <img class="adv-call__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="offer">
    </a>
    <a href="http://" class="adv-call__link">
      <span class="adv-call__text">
        {{__('')}}
        Нет участка? <br /> Подберем с вами идеальный вариант</span>
      <img class="adv-call__img" src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="offer">
    </a>
  </div>
</section>
<x-section.trusted>
</x-section.trusted>

{{-- <section class="faq">
  <div class="faq__header">
    <h1 class="faq__heading">
      {{__('Часто задаваемые вопросы')}}
    </h1>
    <button class="default__button faq__button">
      {{__('Не нашли ответ на свой вопрос? Задайте его специалисту.')}}
    </button>
  </div>
  <div class="faq__wrapper">
    @for ($i = 0; $i < 5; $i++) <div class="faq__item">
      <div class="faq__toggle">
        <span>
          {{__('Часто задаваемые вопросы?')}}
        </span>
        <img class="faq__icon" src="{{ Vite::asset('resources/images/icons/faq.svg') }}" alt="faq__icon">
      </div>
      <div class="faq__content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aut voluptate delectus soluta ratione dolorem
        minima rerum molestiae maiores, cum tempore, molestias ea itaque quisquam totam veritatis repellat ipsa
        voluptatem?
      </div>
  </div>
  @endfor
  </div>
</section> --}}
<x-section.faq>

</x-section.faq>
<x-section.selection>
</x-section.selection>

@endsection
{{-- @for ($i = 0; $i < 8; $i++) --}} {{-- @endfor --}}