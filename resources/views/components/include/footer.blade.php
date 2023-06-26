@php
use App\Content\Footer\Links;
$links = new Links();
@endphp
<footer>
    <div class="footer__wrapper">
        <div class="footer__item footer-info mobile-footer">
            <a class="footer-info__link pc-block" href="/">
                <img class="footer-info__img" src="{{ Vite::asset('resources/images/logos/logo.svg')}}" alt="logo">
            </a>
            <p class="footer-info__paraf last-block">
                {{ __('Федеральная строительная компания «Малые Этажи»') }}
            </p>
            <hr class="footer-info__hr pc-block" />
            <h3 class="footer-info__title footer__title">
                {{ __('Есть вопросы и предложения?') }}
            </h3>
            <button class="default__button footer-info__button" data-modal_id="modal__call">
                {{ __('Напишите нам') }}
            </button>
            <hr class="footer-info__hr" />
            <h3 class="footer-info__title footer__title pc__social">
                {{ __('Соцсети') }}
                <div class="footer-info__social social">
                    <a class="social__link" href="https://t.me/+h973lkjz7V9lNjVi" target="_blank" rel="noopener noreferrer">
                        <img class="social__img" src="{{ Vite::asset('resources/images/icons/social/telega.svg')}}"
                            alt="telegram">
                    </a>
                    <a class="social__link" href="https://www.youtube.com/channel/UCAKkEcrR2pzA8Z9KKbL-i7Q"
                        target="_blank" rel="noopener noreferrer">
                        <img class="social__img" src="{{ Vite::asset('resources/images/icons/social/youtube.svg')}}"
                            alt="youtube">
                    </a>
                    <a class="social__link" href="https://vk.com/malie_etaji" target="_blank" rel="noopener noreferrer">
                        <img class="social__img" src="{{ Vite::asset('resources/images/icons/social/vk.svg')}}"
                            alt="vk">
                    </a>
                </div>
            </h3>
        </div>
        <div class="footer__item footer-info pc-block">
            <a class="footer-contact__link" href="tel:+7 (391) 205-3-444">+7 (391) 205-3-444</a>
            <a class="footer-contact__link"
                href="https://yandex.ru/maps/62/krasnoyarsk/?from=mapframe&ll=92.921431%2C56.036889&mode=usermaps&source=mapframe&um=constructor%3Abdbfdb53bc5f7aa4ba9394ef3d92e9ac554c7d206019d7e87446bead86d16700&utm_source=mapframe&z=15">Главный
                офис: <br /> Красноярск, ул. Октябрьская, 8а,<br />офис 208</a>
            <a class="footer-contact__link" href="mailto:zakaz@malie-etaji.ru">zakaz@malie-etaji.ru</a>
            <div class="map-container-footer" id="map-container-footer">

            </div>
        </div>
        @foreach($links::getLinks() as $elements)
        <div class="footer__item footer-pages">
            @foreach($elements as $label)
            @if($label['header'] === true)
            <h3 class="footer-pages__title footer__title">
                {{$label['text']}}
            </h3>
            @else
            <a class="footer-pages__link" href="{{$label['link']}}">
                {{$label['text']}}
            </a>
            @endif
            @endforeach
        </div>
        @endforeach
    </div>
    <h3 class="footer-info__title footer__title mobile__social">
        {{ __('Соцсети') }}
        <div class="footer-info__social social">
            <a class="social__link" href="https://t.me/+h973lkjz7V9lNjVi" target="_blank" rel="noopener noreferrer">
                <img class="social__img" src="{{ Vite::asset('resources/images/icons/social/telega.svg')}}"
                    alt="telegram">
            </a>
            <a class="social__link" href="https://www.youtube.com/channel/UCAKkEcrR2pzA8Z9KKbL-i7Q" target="_blank"
                rel="noopener noreferrer">
                <img class="social__img" src="{{ Vite::asset('resources/images/icons/social/youtube.svg')}}"
                    alt="youtube">
            </a>
            <a class="social__link" href="https://vk.com/malie_etaji" target="_blank" rel="noopener noreferrer">
                <img class="social__img" src="{{ Vite::asset('resources/images/icons/social/vk.svg')}}" alt="vk">
            </a>
        </div>
    </h3>
    <hr class="footer__hr">
    <div class="imp-info">
        <p class="imp-info__text">
            {{ __('ЛЮБАЯ ИНФОРМАЦИЯ, ПРЕДСТАВЛЕННАЯ НА ДАННОМ САЙТЕ, НОСИТ ИСКЛЮЧИТЕЛЬНО ИНФОРМАЦИОННЫЙ ХАРАКТЕР И НИ
            ПРИ КАКИХ
            УСЛОВИЯХ НЕ ЯВЛЯЕТСЯ ПУБЛИЧНОЙ ОФЕРТОЙ, ОПРЕДЕЛЯЕМОЙ ПОЛОЖЕНИЯМИ СТАТЬИ 437 ГК РФ.') }}
        </p>
        <div class="imp-info__wrapper">
            <a class="imp-info__link" href="http://policy" target="_blank" rel="noopener noreferrer">
                {{ __('Политика приватности') }}
            </a>
            <a class="imp-info__link" href="http://policy" target="_blank" rel="noopener noreferrer">
                {{ __('Согласие на рассылку') }}
            </a>
            <a class="imp-info__link" href="http://policy" target="_blank" rel="noopener noreferrer">
                {{ __('Согласие на обработку персональных данных') }}
            </a>
        </div>
    </div>
</footer>
