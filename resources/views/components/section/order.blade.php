@push('head')
    @once
        @vite('resources/css/components/order.css')
    @endonce
@endpush

<section class="order-consultation">
    <div class="order-consultation__wrapper">
        <div class="order-consultation__header">
            <h1 class="order-consultation__heading">
                {{ __('Заказать консультацию') }}</h1>
            <p class="order-consultation__text">
                {{ __('Просто заполните форму') }}
            </p>
        </div>
        <div class="order-consultation__item sender">
            <form class="order-consultation__form sender__item" action="">
                <input class="order-consultation__input" placeholder="Имя" name="name" type="text">
                <input class="order-consultation__input" placeholder="Телефон" name="phone" type="text">
                <button class="order-consultation__submit">
                    <img src="{{ Vite::asset('resources/images/icons/offer_arr_red.svg') }}" alt="submit">
                </button>
            </form>

            <p class="sender__item sender__info">
                {{ __('Нажимая кнопку «Отправить», вы подтверждаете свое согласие на') }}
                <a class="sender__link" href="/">
                    {{ __('обработку персональных данных') }}
                </a>
            </p>
        </div>
    </div>
</section>
