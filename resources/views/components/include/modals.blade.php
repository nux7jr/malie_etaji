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
              <x-ui.inputs.x-input type='hidden' name="subject" value='Получить проект'></x-ui.inputs.x-input>
              <x-ui.inputs.x-input required placeholder="Имя" name="name"></x-ui.inputs.x-input>
              <x-ui.inputs.x-input required placeholder="Номер телефона" name="phone"></x-ui.inputs.x-input>
            </div>
            <div class="modal__item modal__mess">
              <h1 class="modal__h1">
                {{__('Выберите мессенджер где вам удобнее получить проект')}}
              </h1>
              <div class="modal__soc">
                <div class="modal__radio">
                  <input id="telegram__input" class="visually-hidden" type="radio" name="connect" value="telegram"
                    checked>
                  <label class="" for="telegram__input">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#F04B54" xmlns="http://www.w3.org/2000/svg">
                      <g id="icon/social networks">
                        <path id="Subtract" class="fillable" fill-rule="evenodd" clip-rule="evenodd"
                          d="M18.4833 19.79L18.484 19.7883L18.5014 19.7448L21.5002 4.62568V4.57657C21.5002 4.19987 21.361 3.87101 21.0581 3.67375C20.793 3.50109 20.4882 3.48879 20.2745 3.50501C20.0485 3.52217 19.8354 3.57858 19.6879 3.62554C19.612 3.6497 19.5484 3.67298 19.503 3.69059C19.4802 3.69943 19.4617 3.70692 19.4483 3.71251L19.4351 3.71807L2.71526 10.277L2.71066 10.2787C2.70163 10.2819 2.68969 10.2864 2.67526 10.292C2.64651 10.3032 2.60737 10.3192 2.56139 10.3401C2.47111 10.381 2.34637 10.4441 2.21987 10.5307C2.00502 10.6779 1.5959 11.0262 1.66499 11.5784C1.72221 12.0358 2.03751 12.3263 2.25008 12.4767C2.36403 12.5574 2.47304 12.6155 2.55287 12.6535C2.59332 12.6728 2.62767 12.6875 2.65326 12.6979C2.66609 12.7032 2.67682 12.7073 2.68512 12.7105L2.69574 12.7144L2.70253 12.717L5.62777 13.7018C5.6179 13.8853 5.6361 14.0724 5.68478 14.2571L7.15006 19.8155C7.3238 20.4745 7.92002 20.9336 8.60159 20.9331C9.21252 20.9327 9.75435 20.5631 9.98454 20.0117L12.2722 17.5656L16.2012 20.5778L16.2571 20.6022C16.614 20.758 16.9475 20.8073 17.2525 20.7657C17.557 20.7241 17.7989 20.5964 17.9807 20.451C18.1595 20.3079 18.2821 20.1464 18.3592 20.0248C18.3984 19.963 18.4276 19.9087 18.4478 19.8679C18.458 19.8473 18.466 19.83 18.472 19.8164L18.4796 19.799L18.4822 19.7926L18.4833 19.79ZM7.13518 13.8747C7.10187 13.7484 7.15416 13.615 7.26444 13.545L17.1865 7.24407C17.1865 7.24407 17.77 6.88978 17.7492 7.24407C17.7492 7.24407 17.8533 7.30664 17.5406 7.59837C17.244 7.87544 10.4689 14.4165 9.7834 15.0784C9.74383 15.1166 9.72021 15.1604 9.70627 15.2136L8.60046 19.4331L7.13518 13.8747Z"
                          fill="#F04B54" />
                      </g>
                    </svg>
                  </label>
                </div>
                <div class="modal__radio">
                  <input id="whatsUp__input" class="visually-hidden" type="radio" name="connect" value="whatsUp">
                  <label class="" for="whatsUp__input">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="icon/social networks">
                        <path id="Subtract" class="fillable" fill-rule="evenodd" clip-rule="evenodd"
                          d="M2.18406 21.3314C2.10224 21.6284 2.37273 21.9025 2.67078 21.8247L7.27812 20.6213C8.73247 21.409 10.3699 21.8275 12.037 21.8275H12.0419C17.5279 21.8275 21.9999 17.3815 21.9999 11.9163C21.9999 9.26735 20.9659 6.77594 19.0862 4.90491C17.2064 3.03397 14.7082 2 12.0419 2C6.55595 2 2.08399 6.44605 2.08399 11.9114C2.08336 13.65 2.54228 15.3582 3.41467 16.8645L2.18406 21.3314ZM8.88584 7.16985C9.0688 7.17475 9.27164 7.18465 9.46463 7.61303C9.5926 7.89821 9.80818 8.4232 9.98379 8.85087C10.1204 9.18366 10.2329 9.45751 10.261 9.51356C10.3253 9.64156 10.3649 9.78926 10.2808 9.96156C10.2709 9.98188 10.2615 10.0013 10.2525 10.02C10.1851 10.16 10.1371 10.2597 10.0236 10.3899C9.97698 10.4435 9.92839 10.5022 9.87998 10.5607C9.79484 10.6636 9.71025 10.7658 9.63774 10.838C9.50914 10.9659 9.37553 11.1039 9.52392 11.3599C9.6724 11.6159 10.1918 12.4579 10.9586 13.1373C11.7829 13.8712 12.4997 14.1805 12.8621 14.3368C12.9324 14.3672 12.9894 14.3918 13.0312 14.4126C13.2885 14.5406 13.4418 14.5209 13.5902 14.3486C13.7387 14.1762 14.2333 13.6001 14.4065 13.3441C14.5747 13.0881 14.7478 13.1275 14.9853 13.2161C15.2227 13.3047 16.4891 13.9251 16.7463 14.0531C16.7971 14.0784 16.8447 14.1012 16.8888 14.1224C17.0677 14.2082 17.1894 14.2665 17.241 14.3535C17.3053 14.4618 17.3053 14.9739 17.0926 15.5746C16.875 16.1752 15.8262 16.7513 15.3513 16.7956C15.3063 16.7999 15.2616 16.8053 15.2155 16.8108C14.7803 16.8635 14.2278 16.9303 12.2595 16.1555C9.83414 15.2018 8.23311 12.8354 7.90942 12.357C7.88387 12.3192 7.86628 12.2932 7.85687 12.2806L7.85139 12.2733C7.70413 12.0762 6.80318 10.8707 6.80318 9.62685C6.80318 8.43682 7.3894 7.81726 7.65679 7.53467C7.67373 7.51676 7.6894 7.50021 7.70355 7.48494C7.94096 7.22895 8.21804 7.16495 8.39115 7.16495C8.56434 7.16495 8.73745 7.16495 8.88584 7.16985Z"
                          fill="#F04B54" />
                      </g>
                    </svg>
                  </label>
                </div>
                <div class="modal__radio">
                  <input id="viber__input" class="visually-hidden" type="radio" name="connect" value="viber">
                  <label class="" for="viber__input">
                    <svg width="24" height="24" viewBox="0 0 24 24" class="fillable" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g id="icon/social networks">
                        <path id="Subtract" class="fillable" fill-rule="evenodd" clip-rule="evenodd"
                          d="M16.6763 2.62755C13.5301 1.92428 10.2675 1.92428 7.12126 2.62755L6.78224 2.70333C4.97745 3.10675 3.553 4.49102 3.09811 6.28353C2.30063 9.42602 2.30063 12.7179 3.09811 15.8604C3.53263 17.5727 4.85186 18.9124 6.5422 19.3806L7.00686 22.1564C7.03695 22.3361 7.16246 22.4852 7.33443 22.5456C7.5064 22.6059 7.69758 22.5679 7.8334 22.4464L10.5641 20.0031C12.6086 20.128 14.6662 19.9657 16.6763 19.5164L17.0153 19.4406C18.8201 19.0372 20.2446 17.6529 20.6995 15.8604C21.4969 12.7179 21.4969 9.42602 20.6995 6.28353C20.2446 4.49102 18.8201 3.10675 17.0153 2.70333L16.6763 2.62755ZM7.96472 6.2019C7.77897 6.17476 7.58952 6.21205 7.42791 6.30756H7.41413C7.03892 6.52749 6.70092 6.80547 6.41269 7.13115C6.17316 7.40809 6.04322 7.68831 6.0091 7.95803C5.98875 8.11881 6.00253 8.27959 6.05044 8.43315L6.0675 8.44365C6.33722 9.2364 6.68963 9.99896 7.12013 10.7169C7.67467 11.7255 8.35713 12.6583 9.15057 13.4922L9.17419 13.5263L9.2116 13.5539L9.23522 13.5814L9.26278 13.6051C10.0997 14.4008 11.0347 15.0865 12.0453 15.6453C13.2003 16.274 13.9012 16.5713 14.3218 16.6947V16.7012C14.4452 16.7387 14.5574 16.7557 14.6703 16.7557C15.0288 16.7294 15.3682 16.5839 15.6343 16.3423C15.9585 16.054 16.2334 15.7146 16.4481 15.3376V15.331C16.6495 14.9517 16.5813 14.5927 16.2906 14.3499C15.7083 13.841 15.0788 13.389 14.4104 13C13.9628 12.7572 13.5081 12.9042 13.3237 13.1503L12.9306 13.6457C12.7291 13.8918 12.3629 13.8577 12.3629 13.8577L12.3524 13.8643C9.62175 13.1667 8.89332 10.4019 8.89332 10.4019C8.89332 10.4019 8.85919 10.0259 9.11185 9.83425L9.60403 9.43787C9.83963 9.24625 10.0037 8.79212 9.75103 8.3439C9.36477 7.67463 8.91373 7.04489 8.40441 6.46375C8.29306 6.32674 8.13685 6.23353 7.96341 6.20059L7.96472 6.2019ZM12.5792 5.00009C12.3031 5.00009 12.0792 5.22395 12.0792 5.50009C12.0792 5.77623 12.3031 6.00009 12.5792 6.00009C13.8437 6.00009 14.8944 6.41341 15.7245 7.20484C16.1518 7.63824 16.4844 8.15124 16.7028 8.71263C16.922 9.27613 17.0217 9.877 16.9961 10.4789C16.9844 10.7547 17.1985 10.9879 17.4744 10.9996C17.7503 11.0114 17.9835 10.7972 17.9952 10.5213C18.0267 9.7809 17.9039 9.04214 17.6347 8.35009C17.3655 7.65807 16.9558 7.02746 16.4307 6.49657L16.4207 6.48696C15.3907 5.50193 14.0851 5.00009 12.5792 5.00009ZM12.5452 6.64442C12.2691 6.64442 12.0452 6.86828 12.0452 7.14442C12.0452 7.42056 12.2691 7.64442 12.5452 7.64442H12.5615C13.474 7.70872 14.1379 8.01286 14.6034 8.5121C15.0799 9.02626 15.3267 9.66489 15.3084 10.4551C15.302 10.7311 15.5207 10.9601 15.7967 10.9665C16.0728 10.9729 16.3018 10.7543 16.3082 10.4782C16.3322 9.44071 15.9985 8.54607 15.3363 7.83174L15.3354 7.8308C14.6588 7.10472 13.7305 6.72061 12.6122 6.64554L12.5955 6.64442H12.5452ZM12.5263 8.31877C12.2505 8.30426 12.0152 8.51604 12.0007 8.7918C11.9862 9.06756 12.198 9.30287 12.4737 9.31739C12.8924 9.33943 13.1592 9.46499 13.327 9.63443C13.4956 9.8046 13.6216 10.0771 13.6446 10.5043C13.6595 10.7801 13.895 10.9916 14.1708 10.9767C14.4465 10.9619 14.658 10.7264 14.6432 10.4506C14.6109 9.85058 14.4231 9.32011 14.0376 8.93078C13.6513 8.54072 13.1238 8.35022 12.5263 8.31877Z"
                          fill="#F04B54" />
                      </g>
                    </svg>
                  </label>
                </div>
              </div>
            </div>
            <div class="modal__item">
              <button class="default__button">{{__('Отправить')}}</button>
            </div>
            @csrf
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
              <x-ui.inputs.x-input type='hidden' name="subject" value='Свяжитесь с нами'></x-ui.inputs.x-input>
              <x-ui.inputs.x-input required placeholder="Вопрос или предложение" name="question"></x-ui.inputs.x-input>
            </div>
            <div class="modal__item call__item">
              <x-ui.inputs.x-input required placeholder="Имя" name="name"></x-ui.inputs.x-input>
              <x-ui.inputs.x-input required placeholder="Номер телефона" name="phone"></x-ui.inputs.x-input>
              <button class="default__button">{{__('Отправить')}}</button>
            </div>
            @csrf
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
          <h1 class="modal__heading">{{__('Заказать звонок')}}</h1>
          <p class="modal__paraf">{{__('Наш менеджер свяжется с вами в ближайшее время')}}</p>
        </div>
        <div class="modal__inner">
          <form class="modal__form income__form">
            <div class="modal__item income__item">
              @csrf
              <x-ui.inputs.x-input type='hidden' name="subject" value='Заказать звонок'></x-ui.inputs.x-input>
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
