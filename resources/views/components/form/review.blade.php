@push('head')
@once
@vite("resources/css/components/peculiarities.css")

@endonce
@endpush



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

    <div class="datepiker__flex">
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
      <div class="label_percents_toggle space__between">
        <h4>{{__('Мне нужен трансфер')}}
          <button class="tooltip">
            <img class="toltip-button__img" src="{{ Vite::asset('/resources/images/components/toltip.svg') }}"
              alt="toltip">
            <span class="tooltiptext">
              Tooltip text
            </span>
          </button>
        </h4>
        <div class="space__between">
          <x-ui.inputs.radio name="transfer" checked="false" before="{{$percent = -1 . '%'}}"></x-ui.inputs.radio>
          <h4 class="grayest"></h4>
        </div>
      </div>
    </div>
    <div class=" datepiker__user-info">
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