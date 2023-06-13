@push('head')
@once
@vite('resources/js/components/faq.js')
@vite('resources/css/components/faq.css')
@endonce
@endpush

<section class="faq">
  <div class="faq__header">
    <h1 class="faq__heading">
      {{__('Часто задаваемые вопросы')}}
    </h1>
    <button class="default__button faq__button pc-block">
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
  <button class="default__button faq__button mobile-block">
    {{__('Не нашли ответ на свой вопрос? Задайте его специалисту.')}}
  </button>
  </div>
</section>