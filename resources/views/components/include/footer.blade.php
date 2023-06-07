@php
use App\Content\Footer\Links;
$links = new Links();
@endphp
<footer>
    <div class="footer__wrapper">
        <div class="footer__item footer-info">
            <a class="footer-contact__link" href="tel:+7 (391) 205-3-444">+7 (391) 205-3-444</a>
            <a class="footer-contact__link"
                href="https://yandex.ru/maps/62/krasnoyarsk/?from=mapframe&ll=92.921431%2C56.036889&mode=usermaps&source=mapframe&um=constructor%3Abdbfdb53bc5f7aa4ba9394ef3d92e9ac554c7d206019d7e87446bead86d16700&utm_source=mapframe&z=15">Главный
                офис: <br /> Красноярск, ул. Октябрьская, 8а,<br />офис 208</a>
            <a class="footer-contact__link" href="mailto:zakaz@malie-etaji.ru">zakaz@malie-etaji.ru</a>
            <div class="map-container-footer">

            </div>
        </div>
        @foreach($links::getLinks() as $elements)
        <div class="footer__item footer-pages">
            @foreach($elements as $label)
            @if($label['header'] === true)
            <a class="footer-pages__link" href="{{$label['link']}}">
                <h3 class="footer-pages__title footer__title">
                    {{$label['text']}}
                </h3>
            </a>
            @else
            <a class="footer-pages__link" href="{{$label['link']}}">
                {{$label['text']}}
            </a>
            @endif
            @endforeach
        </div>
        @endforeach
    </div>

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