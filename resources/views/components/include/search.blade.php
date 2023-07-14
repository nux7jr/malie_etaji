@php
use App\Content\main\HousesInfo;
@endphp

<div class="modal-universal">
  <div class="modal__window search__window" id='modal__search'>
    <section class="modal__wrapper">
      <div class="modal__content">
        <button class="modal__close">
          <img class="modal__image-close" src="{{ Vite::asset('resources/images/modals/X.svg') }}" alt="">
        </button>
        <div class="modal__inner">
          <form class="modal__form search__form">
            <div class="modal__item search__item">
              @csrf
              <x-ui.inputs.x-input required placeholder="Введите ваш запрос" name="search"></x-ui.inputs.x-input>
            </div>
          </form>
          <div class="res-content">
            @for ($i = 0; $i < 5; $i++)
            <p>Раздел по поиску</p>
            @endfor
              {{-- <div class="home-projects__wrapper">
                  @php
                  $output = array_slice(HousesInfo::$card_elements->toArray(), 0, 3);
                  @endphp
          
                  @foreach ($output as $key => $item)
                  <x-cards.project-item info="{!! json_encode($item) !!}">
                  </x-cards.project-item>
                  @endforeach
              </div> --}}
          </div>
        </div>
      </div>
    </section>
  </div>
</div>