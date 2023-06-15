<div class="modal-universal">
  <div class="modal__window" id='modal__cell'>
    <section class="modal__wrapper">
      <div class="modal__content">
        <button class="modal__close">
          <img class="modal__image-close" src="{{ Vite::asset('resources/images/modals/X.svg') }}" alt="">
        </button>
        <div class="modal__info">
          <h1 class="modal__heading">{{__('Укажите ваши контакты')}}</h1>
          <p class="modal__paraf">{{__('Заполните короткую форму')}}</p>
        </div>
        <div class="modal__inner">
          <form class="modal__form">
            <div class="modal__item">
              <x-ui.inputs.x-input placeholder="Имя" name="name"></x-ui.inputs.x-input>
              <x-ui.inputs.x-input placeholder="Номер телефона" name="phone"></x-ui.inputs.x-input>
            </div>
            <div class="modal__item modal__mess">
              <h1 class="modal__h1">
                {{__('Выберите мессенджер где вам удобнее получить проект')}}
              </h1>
              <div class="modal__social">
                <a class="modal__link" href="http://">
                  <img class="modal__img" src="{{ Vite::asset('resources/images/modals/Telega.svg') }}" alt="telega">
                </a>
                <a class="modal__link" href="http://">
                  <img class="modal__img" src="{{ Vite::asset('resources/images/modals/WhatsUp.svg') }}" alt="whatsUp">
                </a>
                <a class="modal__link" href="http://">
                  <img class="modal__img" src="{{ Vite::asset('resources/images/modals/Viber.svg') }}" alt="Viber">
                </a>
              </div>
            </div>
            <div class="modal__item">
              <button class="default__button">{{__('Отправить')}}</button>
            </div>
          </form>
          <span class="modal__policy">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <a
              class="policy__link" href="http://" target="_blank" rel="noopener noreferrer">
              обработку персональных данных
            </a></span>
        </div>
      </div>
      <div class="modal-thx">
        <button class="modal__close">
          <img class="modal__image-close" src="{{ Vite::asset('resources/images/modals/X.svg') }}" alt="">
        </button>
        <h1 class="modal-thx__heading">Спасибо за подписку</h1>
        <p class="modal-thx__paraf">Закройте форму, чтобы продолжить просмотр сайта</p>
      </div>
    </section>
  </div>
</div>

<div class="modal-universal">
  <div class="modal__window" id='modal__call'>
    <section class="modal__wrapper">
      <div class="modal__content">
        <button class="modal__close">
          <img class="modal__image-close" src="{{ Vite::asset('resources/images/modals/X.svg') }}" alt="">
        </button>
        <div class="modal__info">
          <h1 class="modal__heading">{{__('Свяжитесь с нами')}}</h1>
          <p class="modal__paraf">{{__('Ответим на любой вопрос и выслушаем все предложения')}}</p>
        </div>
        <div class="modal__inner">
          <form class="modal__form call__form">
            <div class="modal__item">
              <x-ui.inputs.x-input placeholder="Вопрос или предложение" name="question"></x-ui.inputs.x-input>
            </div>
            <div class="modal__item call__item">
              <x-ui.inputs.x-input placeholder="Имя" name="name"></x-ui.inputs.x-input>
              <x-ui.inputs.x-input placeholder="Номер телефона" name="phone"></x-ui.inputs.x-input>
              <button class="default__button">{{__('Отправить')}}</button>
            </div>
          </form>
          <span class="modal__policy">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <a
              class="policy__link" href="http://" target="_blank" rel="noopener noreferrer">
              обработку персональных данных
            </a></span>
        </div>
      </div>
      <div class="modal-thx">
        <button class="modal__close">
          <img class="modal__image-close" src="{{ Vite::asset('resources/images/modals/X.svg') }}" alt="">
        </button>
        <h1 class="modal-thx__heading">Скоро наш менеджер свяжется с вами</h1>
        <p class="modal-thx__paraf">Закройте форму, чтобы продолжить просмотр сайта</p>
      </div>
    </section>
  </div>
</div>



<div class="modal-universal">
  <div class="modal__window" id='modal__income'>
    <section class="modal__wrapper">
      <div class="modal__content">
        <button class="modal__close">
          <img class="modal__image-close" src="{{ Vite::asset('resources/images/modals/X.svg') }}" alt="">
        </button>
        <div class="modal__info">
          <h1 class="modal__heading">{{__('Свяжитесь с нами')}}</h1>
          <p class="modal__paraf">{{__('Ответим на любой вопрос и выслушаем все предложения')}}</p>
        </div>
        <div class="modal__inner">
          <form class="modal__form income__form">
            <div class="modal__item income__item">
              <x-ui.inputs.x-input placeholder="Имя" name="name"></x-ui.inputs.x-input>
              <x-ui.inputs.x-input placeholder="Номер телефона" name="phone"></x-ui.inputs.x-input>
              <button class="default__button">{{__('Отправить')}}</button>
            </div>
          </form>
          <span class="modal__policy">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <a
              class="policy__link" href="http://" target="_blank" rel="noopener noreferrer">
              обработку персональных данных
            </a></span>
        </div>
      </div>
      <div class="modal-thx">
        <button class="modal__close">
          <img class="modal__image-close" src="{{ Vite::asset('resources/images/modals/X.svg') }}" alt="">
        </button>
        <h1 class="modal-thx__heading">Скоро наш менеджер свяжется с вами</h1>
        <p class="modal-thx__paraf">Закройте форму, чтобы продолжить просмотр сайта</p>
      </div>
    </section>
  </div>
</div>