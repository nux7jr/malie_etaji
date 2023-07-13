@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/mortgage/mortgage.js')
@vite('resources/css/pages/mortgage/mortgage.css')
@endsection

@php
use App\Content\main\Mortgage;
$mortgage_list = (new Mortgage())->toArray();


use App\Content\main\Faq;
$faq = (new Faq())->toArray();

@endphp

@section('content')
<section class="mortgage">
  <x-ui.path.path paths={!!json_encode($paths)!!} class="mortgage__path"></x-ui.path.path>
  <div class="mortgage__wrapper">
    <h1 class="mortgage__heading">{{__('Ипотека от “Малые этажи”')}}</h1>
    <p class="mortgage__paraf">{{__('С нами построили дом по ипотеке уже')}} <span
        class="mortgage__paraf--red">{{__('>100 человек')}}</span> </p>
    <p class="mortgage__paraf">
      {{__('СК «Малые Этажи» входит в группу компаний Tiksan Group — компания лидер в строительной и околостроительной
      сфере.
      Мы заинтересованы в создании шедевра — Вашей загородной мечты, от этапа проектирования до вручения ключей.')}}
    </p>
  </div>
  <div class="mortgage__option">
    <a href="#mortgage-calc" class="default__button">
      {{__('Калькулятор ипотеки')}}
    </a>
    <a class="default__button mortgage-c__button" data-ym="consult_ipoteka" data-modal_id="modal__income">
      {{__('Получить консультацию')}}
    </a>
  </div>
  <div class="mortgage-list">
    @php
    $mortgage_arr = array("Выберите проект дома на нашем сайте", "Получите одобрение через нашего специалиста по
    ипотеке", "Подпишите договор на строительство и кредитный договор", 'Дождитесь получения ключей — заезжайте и
    живите');
    @endphp
    @foreach ($mortgage_arr as $key => $item)
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

      <button class="default__button mortgage-prog__button {{ $filter === 'village' ? 'mortgage-prog__button-active'
      : "" }}" data-filter="village">
        {{__('Сельская')}}
      </button>
    </div>
    <div class="mortgage-prog__content">
      @foreach ($mortgage_list as $item)
      <div class="mortgage-prog__section {{ $item['paramFilter'] . '-content' }} mortgage-prog__first">
        <img class="mortgage-prog__img" src="{{$item['image']}}" alt="programm">
        <div class="mortgage-prog__info">
          @foreach ($item['text'] as $textItem)
          <p class="mortgage-prog__paraf">
            {{$textItem}}
          </p>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<x-cards.house-card>
</x-cards.house-card>
<x-section.order class="mortgage__call">
</x-section.order>
<section class="advantages" id="mortgage-adv">
  <h1 class="advantages__heading">
    {{__('Преимущества ипотеки от “Малых этажей”')}}
  </h1>
  <div class="advantages__section">
    <div class="advantages__wrapper">
      <div class="advantages__list">
        <div class="advantages-card advantages-card--first"
          style="background-image: url({{ Vite::asset('resources/images/mortgage/adv/1.png')}})">
        </div>
        @php
        $adv_list = [
        [
        'title' => 'Одобрение за 1 день',
        'text' => 'Мы работаем с 11 банками-партнерами и получаем решение по заявке быстрее чем при самостоятельном
        обращении.'
        ],
        [
        'title' => 'Страхование ниже чем в банках',
        'text' => 'Мы партнеры страховых компаний, можем предложить скидку по тарифу до 40%.'
        ],
        [
        'title' => 'Оформление по двум документам',
        'text' => 'Для подачи заявки не требуется справка с работы, нужны только паспорт и снилс.'
        ],
        [
        'title' => 'Сопровождение на всех этапах сделки',
        'text' => 'Мы будем на связи в течение всего цикла сделки: от подачи заявки до подписания кредитного договора.'
        ],
        ]
        @endphp
        @foreach ($adv_list as $item) <div class="advantages-card">
          <h1 class="advantages-card__heading">{{ $item['title']}}</h1>
          <p class="advantages-card__paraf">{{ $item['text']}}</p>
        </div>
        @endforeach
        <div class="advantages-card advantages-card--last"
          style="background-image: url({{ Vite::asset('resources/images/mortgage/adv/2.jpg')}})">
        </div>
      </div>
      <div class="advantages-person">
        <img class="advantages-person__img" src="{{ Vite::asset('resources/images/mortgage/adv/3.jpg')}}" alt="person">

        <h1 class="advantages-person__name">{{__('Алена Крижановская')}}</h1>
        <p class="advantages-person__text">{{__('Ваш персональный ипотечный брокер')}}</p>
      </div>
    </div>
    <div class="advantages-call">
      <a class="advantages-call__link">
        <span data-modal_id="modal__income" subject='Подберем участок' data-ym="podbor_ZU_ipoteka" class="advantages-call__text">{{__('Нет участка?')}} <br />
          {{__('Подберем с вами идеальный
          вариант')}}
          </span>
        <img data-modal_id="modal__income" subject='Подберем участок' data-ym="podbor_ZU_ipoteka" class="advantages-call__img"
          src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="offer">
      </a>
      <a class="advantages-call__link">
        <span data-modal_id="modal__income" subject='Заказать расчет стоимости' data-ym="raschet_proekta" class="advantages-call__text">
           {{__('Заказать расчет стоимости')}} <br /> {{__('вашего проекта')}}</span>
        <img data-modal_id="modal__income" subject='Заказать расчет стоимости' data-ym="raschet_proekta" class="advantages-call__img"
          src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="offer">
      </a>
    </div>
</section>
<x-section.trusted>
</x-section.trusted>

<x-section.faq faqs='{!! json_encode($faq) !!}'>
</x-section.faq>
<x-section.selection>
</x-section.selection>

@endsection
