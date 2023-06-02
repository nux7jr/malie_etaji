@extends ("layouts.base")

@section('head')
@vite('resources/js/pages/contacts/contacts.js')
@vite('resources/css/pages/contacts/contacts.css')
@endsection

@section('content')
<section class="contacts">
  <x-ui.path.path paths={!!json_encode($paths)!!}>
  </x-ui.path.path>

</section>
<x-section.office-map>
</x-section.office-map>

<section class="smi">
  <div class="smi__wrapper">
    <div class="smi__info">
      <h1 class="smi__h1">Контакты для СМИ и партнеров</h1>
      <p class="smi__paraf">Если у вас есть вопрос для обсуждения или вы хотите обсудить партнерство - свяжитесь с нашим
        Pr-специалистом.
      </p>
      <span class="smi__span">PR-специалист - Анна Темерова <br />
        Телефон: <a class="smi__link" href="tel:+7 (938) 878-75-52 ">+7 (938) 878-75-52 </a><br />
        Электронная почта: a.temerova@tiksan.ru</span>
    </div>
    <div class="smi__call">
      <button class="default__button smi__button">Задать вопрос</button>
      <button class="default__button smi__button">Заказать звонок</button>
      <button class="default__button smi__button">Позвонить</button>
    </div>

  </div>
</section>
<section class="contact-form">
  <x-form.review>
  </x-form.review>
</section>

<x-section.grid-template></x-section.grid-template>
@endsection