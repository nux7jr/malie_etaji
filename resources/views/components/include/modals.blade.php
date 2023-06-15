<div class="modal-call">
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
          <div class="modal__form">
            <div class="modal__item">
              <x-ui.inputs.x-input placeholder="Имя"></x-ui.inputs.x-input>
              <x-ui.inputs.x-input placeholder="Номер телефона"></x-ui.inputs.x-input>
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
          </div>
          <span class="modal__policy">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <a
              class="policy__link" href="http://" target="_blank" rel="noopener noreferrer">
              обработку персональных данных
            </a></span>
        </div>
      </div>
    </section>
  </div>
</div>



<div class="modal-call">
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
          <div class="modal__form">
            <div class="modal__item">
              <x-ui.inputs.x-input placeholder="Имя"></x-ui.inputs.x-input>
              <x-ui.inputs.x-input placeholder="Номер телефона"></x-ui.inputs.x-input>
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
          </div>
          <span class="modal__policy">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <a
              class="policy__link" href="http://" target="_blank" rel="noopener noreferrer">
              обработку персональных данных
            </a></span>
        </div>
      </div>
    </section>
  </div>
</div>