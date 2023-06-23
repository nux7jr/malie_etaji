<div class="modal-universal">
  <div class="modal__window" id='modal__income'>
    <section class="modal__wrapper">
      <div class="modal__content">
        <button class="modal__close">
          <img class="modal__image-close" src="{{ Vite::asset('resources/images/modals/X.svg') }}" alt="">
        </button>
        <div class="modal__info">
          <h1 class="modal__heading">{{__('Заказать звонок')}}</h1>
          <p class="modal__paraf">{{__('Наш менеджер свяжется с вами в ближайшее время')}}</p>
        </div>
        <div class="modal__inner">
          <form class="modal__form income__form">
            <div class="modal__item income__item">
              @csrf
              <x-ui.inputs.x-input required placeholder="Имя" name="name"></x-ui.inputs.x-input>
              <x-ui.inputs.x-input required placeholder="Номер телефона" name="phone"></x-ui.inputs.x-input>
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