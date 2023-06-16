@push('head')
@once
@vite('resources/js/components/faq.js')
@vite('resources/css/components/faq.css')
@endonce
@endpush

@php
use App\Content\main\Faq;
$faq = (new Faq())->toArray();
@endphp

<section class="faq">
  <div class="faq__header">
    <h1 class="faq__heading">
      {{__('Часто задаваемые вопросы')}}
    </h1>
    <button class="default__button faq__button pc-block" data-modal_id="modal__call">
      {{__('Не нашли ответ на свой вопрос? Задайте его специалисту.')}}
    </button>
  </div>
  <div class="faq__wrapper">
    @foreach ($faq as $item) <div class="faq__item">
      <div class="faq__toggle">
        <span>
          {{$item['question']}}
        </span>
        <img class="faq__icon" src="{{ Vite::asset('resources/images/icons/faq.svg') }}" alt="faq__icon">
      </div>
      <div class="faq__content">
        {{$item['ans']}}
      </div>
    </div>
    @endforeach
    <button data-modal_id="modal__call" class="default__button faq__button mobile-block">
      {{__('Не нашли ответ на свой вопрос? Задайте его специалисту.')}}
    </button>
  </div>
</section>