<footer>
    <div class="footer__wrapper">
        <div class="footer__item footer-info">
            <a class="footer-info__link" href="/">
                <img class="footer-info__img" src="images/logos/logo.svg" alt="logo">
            </a>
            <p class="footer-info__paraf">
                {{ __('Федеральная строительная компания  «Малые Этажи»') }}
            </p>
            <hr class="footer-info__hr" />
            <h3 class="footer-info__title footer__title">
                {{ __('Есть вопросы и предложения?') }}
            </h3>
            <button class="default__button footer-info__button">
                {{ __('Напишите нам') }}
            </button>
            <hr class="footer-info__hr" />
            <h3 class="footer-info__title footer__title">
                {{ __('Соцсети') }}
                <div class="footer-info__social social">
                    <a class="social__link" href="http://" target="_blank" rel="noopener noreferrer">
                        <img class="social__img" src="images/icons/social/telega.svg" alt="telegram">
                    </a>
                    <a class="social__link" href="https://www.youtube.com/channel/UCAKkEcrR2pzA8Z9KKbL-i7Q"
                        target="_blank" rel="noopener noreferrer">
                        <img class="social__img" src="images/icons/social/youtube.svg" alt="youtube">
                    </a>
                    <a class="social__link" href="https://vk.com/malie_etaji" target="_blank" rel="noopener noreferrer">
                        <img class="social__img" src="images/icons/social/vk.svg" alt="vk">
                    </a>
                </div>
            </h3>
        </div>
        <div class="footer__item footer-contact">
            <h3 class="footer-contact__title footer__title">
                {{ __('Контакты') }}
            </h3>
            <a class="footer-contact__link" href="tel:+7 (391) 205-3-444">+7 (391) 205-3-444</a>
            <a class="footer-contact__link"
                href="https://yandex.ru/maps/62/krasnoyarsk/?from=mapframe&ll=92.921431%2C56.036889&mode=usermaps&source=mapframe&um=constructor%3Abdbfdb53bc5f7aa4ba9394ef3d92e9ac554c7d206019d7e87446bead86d16700&utm_source=mapframe&z=15">Главный
                офис: <br /> Красноярск, ул. Октябрьская, <br /> 8а, офис 208</a>
            <a class="footer-contact__link" href="mailto:zakaz@malie-etaji.ru">zakaz@malie-etaji.ru</a>
            <div class="map-container-footer">

            </div>
        </div>
        <div class="footer__item footer-pages">
            <h3 class="footer-pages__title footer__title">
                {{ __('Страница') }}
            </h3>
            @for ($i = 0; $i < 12; $i++)
                <a class="footer-pages__link" href="http://">
                    {{ __('Название раздела') }}
                </a>
            @endfor
        </div>
        <div class="footer__item footer-pages">
            <h3 class="footer-pages__title footer__title">
                {{ __('Страница') }}
            </h3>
            @for ($i = 0; $i < 12; $i++)
                <a class="footer-pages__link" href="http://">
                    {{ __('Название раздела') }}
                </a>
            @endfor
        </div>
        <div class="footer__item footer-pages">
            <h3 class="footer-pages__title footer__title">
                {{ __('Страница') }}
            </h3>
            @for ($i = 0; $i < 12; $i++)
                <a class="footer-pages__link" href="http://">
                    {{ __('Название раздела') }}
                </a>
            @endfor
        </div>
    </div>

    <hr class="footer__hr">
    <div class="imp-info">
        <p class="imp-info__text">
            {{ __('ЛЮБАЯ ИНФОРМАЦИЯ, ПРЕДСТАВЛЕННАЯ НА ДАННОМ САЙТЕ, НОСИТ ИСКЛЮЧИТЕЛЬНО ИНФОРМАЦИОННЫЙ ХАРАКТЕР И НИ ПРИ КАКИХ
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