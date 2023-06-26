@push('head')
@once
@vite('resources/css/components/selection.css')
@vite('resources/js/components/selection.js')
@endonce
@endpush

<section class="selection">
  <div class="selection__wrapper">
    <form class="selection__form">
      <h1 class="selection__heading">{{__('Подберите себе дом по комфорту!')}}</h1>
      <div class="selection__option">

        <div class="selection__item">
          <label class="selection__label" for="house-list">Линейка домов</label>
          <x-ui.lists.dropdown id="house-list" name="house-list">
            <?php
              $some_options = [
                'Не выбрано',
                'Все',
                'Одноэтажные',
                'Двухэтажные',
                'Барны'
              ];
              ?>
            @foreach($some_options as $option)
            <x-ui.lists.option value="{{$option}}">
              {{$option}}
            </x-ui.lists.option>
            @endforeach
          </x-ui.lists.dropdown>
        </div>
        <div class="selection__item">
          <div class="selection__container">
            <div class="selection__slide">
              <label class="selection__label selection__price">Стоимость, млн ₽</label>
              <div class="selection-input__rangees">
                <div class="rangees__inner">
                  от
                  <div class="formatting-end">
                  </div>
                </div>
                <div class="line">
                  —
                </div>
                <div class="rangees__inner">
                  до
                  <div class="formatting-start">
                  </div>
                </div>
              </div>
              <input type="hidden" name="price-start" class="hide-end" />
              <input type="hidden" name="price-end" class="hide-start" />
              <div class="rangees"></div>
            </div>
            <div class="selection__slide">
              <label class="selection__label selection__price">Площадь, м2</label>
              <div class="selection-input__rangees">
                <div class="rangees__inner">
                  от
                  <div class="formatting-end-square">
                  </div>
                </div>
                <div class="line">
                  —
                </div>
                <div class="rangees__inner">
                  до
                  <div class="formatting-start-square">
                  </div>
                </div>
              </div>
              <input type="hidden" name="price-start" class="hide-end-square" />
              <input type="hidden" name="price-end" class="hide-start-square" />
              <div class="rangees-square"></div>
            </div>
          </div>
        </div>

        <div class="selection__item selection-filter__item">
          <span for="floors" class="selection-input__label selection__label">Кол-во этажей</span>
          <div class="floors__wrapper">
            <div class="floors__item">
              <input class="floors__input" type="radio" name="floor" value="1" id="one-floor">
              <label class="floors__label" for="one-floor">1</label>
            </div>
            <div class="floors__item">
              <input class="floors__input" type="radio" name="floor" value="2" id="two-floor">
              <label class="floors__label" for="two-floor">2</label>
            </div>
          </div>
        </div>
        <div class="selection__item selection-filter__item">
          <span for="floors" class="selection-input__label selection__label">Дополнительно</span>
          <div class="floors__wrapper">
            <div class="floors__item">
              <input class="floors__input" type="checkbox" name="garage" value="true" id="garage">
              <label class="floors__label" for="garage">+ гараж</label>
            </div>
            <div class="floors__item">
              <input class="floors__input" type="checkbox" name="pantry" value="true" id="pantry">
              <label class="floors__label" for="pantry">+ кладовая</label>
            </div>
            <div class="floors__item">
              <input class="floors__input" type="checkbox" name="wardrobe" value="true" id="wardrobe">
              <label class="floors__label" for="wardrobe">+ гардеробная</label>
            </div>
            <div class="floors__item">
              <input class="floors__input" type="checkbox" name="terrace" value="true" id="terrace">
              <label class="floors__label" for="terrace">+ терасса</label>
            </div>
            <div class="floors__item">
              <input class="floors__input" type="checkbox" name="balcony" value="true" id="balcony">
              <label class="floors__label" for="balcony">+ балкон</label>
            </div>
          </div>
        </div>
        <button class="default__button selection__submit" type="button" data-modal_id="modal__cell">{{__('Выбрать
          дом')}}</button>
      </div>
    </form>
  </div>
</section>