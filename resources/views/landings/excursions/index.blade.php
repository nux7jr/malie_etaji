<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Экскурсии</title>
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=1b463e1c-30e3-4e94-b592-300f2f77b882"
            type="text/javascript"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        
        <link rel="stylesheet" href="/landings/excursions/css/app.css" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        @vite('resources/js/general/sender.js')
        @vite('resources/js/general/mask.js')
        @vite('resources/css/app.css')
        @vite('resources/css/components/modal.css')
        @vite('resources/js/components/modal.js')
         <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(67008322, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/67008322" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
            <!-- Top.Mail.Ru counter -->
        <script type="text/javascript">
            var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "3366612", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "tmr-code");
        </script>
        <noscript>
            <div><img src="https://top-fwz1.mail.ru/counter?id=3366612;js=na" style="position:absolute;left:-9999px;"
                    alt="Top.Mail.Ru" /></div>
        </noscript>
        <!-- /Top.Mail.Ru counter -->
    </head>
    <body>
        <header>
            <div class="header__wrapper">
                <div class="header__item navigation">
                    <a class="header__button header__link header__logo">
                        <img src="/landings/excursions/images/logo.svg" class="logo">
                    </a>
                    <div class="header__call">
                        <button data-modal_id="modal__income" class="header__button call__button modal-open">
                            <img class="call__img" src="/landings/excursions/images/call.svg" alt="Заказать звонок">Заказать звонок
                        </button>
                        <a class="header__button phone__link" href="tel:73912053444">+7 (391) 205-3-444</a>
                    </div>
                </div>
            </div>
        </header>
        <main id="app" class="app">
            <div class="container">
                <section id="offer">
                    <div class="offer__wrapper">
                        <div class="offer__heading">
                            <div class="offer__content">
                                <h1 class="offer__title">Груповые экскурсии <br> по строящимся объектам и готовым объектам ФСК Малые этажи</h1>
                                <h4 class="offer__text">ФСК Малые Этажи открывает запись на бесплатный групповой тур по нашим объектам. <br> Получите индивидуальные выгодные условия строительства в нашей компании.</h4>
                                <div class="offer__buttons">
                                    <button data-modal_id="modal__income" class="offer__main-button default__button">Записаться на экскурсию</button>
                                    <button data-modal_id="modal__income" class="offer__secondary-button default__button">Получить консультацию</button>
                                </div>
                            </div>
                            <div class="offer__img">
                            </div>
                        </div>
                        
                        <div class="offer__advantages">
                            <div class="offer__advantage">
                                <img class="offer__advantage-image" src="/landings/excursions/images/bus.svg">
                                <span class="offer__advantage-text">Организованный трансфер до  объектов<br> ФСК Малые Этажи</span>
                            </div>
                            <div class="offer__advantage">
                                <img class="offer__advantage-image" src="/landings/excursions/images/home.svg">
                                <span class="offer__advantage-text">Экскурсия по объектам с опытными специалистами</span>
                            </div>
                            <div class="offer__advantage">
                                <img class="offer__advantage-image" src="/landings/excursions/images/message.svg">
                                <span class="offer__advantage-text">Консультация по технологиям, планировкам и ипотеке</span>
                            </div>
                            <div class="offer__advantage">
                                <img class="offer__advantage-image" src="/landings/excursions/images/settings.svg">
                                <span class="offer__advantage-text">Пообщаетесь с прорабом и строителями, оцените качество материалов</span>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="for-whom">
                    <div class="for-whom__wrapper">
                        <div class="for-whom__heading">
                            <h2>Для кого эта экскурсия?</h2>
                            <h4>СК «Малые Этажи» входит в группу компаний Tiksan Group — компания лидер в строительной и инженерной сфере. Мы заинтересованы в создании шедевра — Вашей загородной мечты, от этапа проектирования до вручения ключей.</h4>
                        </div>
                        <div class="for-whom__content">
                            <div class="for-whom__row for-whom__row-first">
                                <div class="for-whom__img for-whom__img-first"></div>
                                <div class="for-whom__item">
                                    <h3>Кто еще не выбрал подрядчика</h3>
                                    <h4>Зададите любые интересующие вопросы</h4>
                                </div>
                                <div class="for-whom__item">
                                    <h3>Кто хочет знать все этапы строительства</h3>
                                    <h4>Подробно познакомитесь с технологией строительства</h4>
                                </div>
                            </div>
                            <div class="for-whom__row for-whom__row-last">
                                <div class="for-whom__item">
                                    <h3>Кто сомневается в качестве строительства</h3>
                                    <h4>Оцените качество материалов на стройплощадке</h4>
                                </div>
                                <div class="for-whom__img for-whom__img-last"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="slider">
                    <div class="slider__wrapper">
                        <div class="slider__header">
                            <h2>Фотографии</h2>
                            <h4>Наши готовые решения включают всё необходимое для полноценной жизни в доме: коммуникации, септик, скважина для водоснабжения, вентиляция, электричество, установка розеток. Полное решение «под ключ» и также наружная и внутренняя отделка «белый куб».</h4>
                        </div>
                        <div class="slider__content swiper-container" style="width: auto; height: 300px;">
                            <div class="slider swiper-wrapper">
                                <div class="slider__item swiper-slide">
                                    <img class="slider__item-img" src="/landings/excursions/images/slider-1.jpg">
                                </div>
                                <div class="slider__item swiper-slide">
                                    <img class="slider__item-img" src="/landings/excursions/images/slider-2.jpg">
                                </div>
                                <div class="slider__item swiper-slide">
                                    <img class="slider__item-img" src="/landings/excursions/images/slider-3.jpg">
                                </div>
                                <div class="slider__item swiper-slide">
                                    <img class="slider__item-img" src="/landings/excursions/images/slider-4.jpg">
                                </div>
                                <div class="slider__item swiper-slide">
                                    <img class="slider__item-img" src="/landings/excursions/images/slider-5.jpg">
                                </div>
                            </div>
                            <div class="slider__arrows">
                                <div class="slider__arrow slider__arrow-left swiper-button-prev">
                                    <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.57291 11.7629L18.9479 11.7629" stroke="white" stroke-width="3.35417" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.3706 17.5363L4.57272 11.7633L10.3706 5.98932" stroke="white" stroke-width="3.35417" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="slider__arrow slider__arrow-right swiper-button-next">
                                    <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.4271 11.2371H5.05209" stroke="white" stroke-width="3.35417" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.6294 5.46372L19.4273 11.2367L13.6294 17.0107" stroke="white" stroke-width="3.35417" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="slider__pagination swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                <section id="callback">
                    <div class="callback__wrapper">
                        <div class="callback__heading">
                            <h2>Запишитесь <br>на групповую экскурсию</h2>
                            <h4>С вами свяжется специалист по недвижимости, подтвердит выбранное время просмотра, организует посещение предложения и проведёт вам экскурсию.</h4>
                        </div>
                        <div class="callback__content">
                            <div class="callback__text">
                                <h4>Экскурсия проводится каждую субботу, записаться можете в форме записи ниже</h4>
                            </div>
                            <form class="callback__form">
                                <input type="hidden" name="subject" value="Записаться на групповую экскурсию">
                                <input class="callback__input" type="text" name="name" id="name" placeholder="Имя" required>
                                <input class="callback__input" type="tel" name="phone" id="tel" placeholder="Телефон" required>
                                <button class="callback__btn" type="submit" id="submit">Записаться на просмотр</button>
                            </form>
                            <a class="callback__approval" href="/">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <span>обработку персональных данных</span></a>
                        </div>
                        <div class="callback__content-hidden">
                            <h1 class="callback__heading">Спасибо за заявку, мы вам перезвоним</h1>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <div class="footer__wrapper">
                <div class="footer__item footer-info mobile-footer">
                    <a class="footer-info__link" href="/">
                        <img class="footer-info__img" src="/landings/excursions/images/logo.svg" alt="logo">
                    </a>
                    <p class="footer-info__paraf last-block">Федеральная строительная компания «Малые Этажи»</p>
                </div>
                <div class="footer__item footer-info footer-contact footer-no-border">
                    <div class="footer-contact__block">
                        <h3 class="footer-contact__title footer__title">Контакты</h3>
                        <a class="footer-contact__link" href="tel:73912053444">+7 (391) 205-3-444</a>
                        <a class="footer-contact__link" href="https://yandex.ru/maps/62/krasnoyarsk/?from=mapframe&ll=92.921431%2C56.036889&mode=usermaps&source=mapframe&um=constructor%3Abdbfdb53bc5f7aa4ba9394ef3d92e9ac554c7d206019d7e87446bead86d16700&utm_source=mapframe&z=15">Главный офис: <br> Красноярск, ул. Октябрьская, 8а, <br> офис 208</a>
                        <a class="footer-contact__link" href="mailto:zakaz@malie-etaji.ru">zakaz@malie-etaji.ru</a>
                    </div>
                </div>
                <div class="footer__item footer-info footer-contact">
                    <div class="footer-contact__block footer-contact__img">
                        <div class="map-container-footer" id="map-container-footer">
    
                        </div>
                    </div>
                </div>
                <div class="footer__item footer-info">
                    <h3 class="footer-contact__title footer__title">Также вы можете записаться по телефону или в WhatsApp</h3>
                    <a class="footer-contact__link" href="tel:79915437635">+7 (991) 543-76-35</a>
                    <button class="default__button footer-info__button"><img class="call__img" src="/landings/excursions/images/whatsapp.svg" alt="Запись в WhatsApp">Запись в WhatsApp</button>
                </div>
                <div class="footer__item footer-info">
                    <h3 class="footer-info__title footer__title">Соцсети</h3>
                    <div class="footer-info__social social">
                        <a class="social__link" href="/" target="_blank" rel="noopener noreferrer">
                            <img class="social__img" src="/landings/excursions/images/whatsapp.svg" alt="WhatsApp">
                        </a>
                        <a class="social__link" href="/" target="_blank" rel="noopener noreferrer">
                            <img class="social__img" src="/landings/excursions/images/telegram.svg" alt="Telegram">
                        </a>
                        <a class="social__link" href="/" target="_blank" rel="noopener noreferrer">
                            <img class="social__img" src="/landings/excursions/images/vk.svg" alt="VK">
                        </a>
                    </div>
                </div>
            </div>
            <hr class="footer__hr">
            <div class="imp-info">
                <p class="imp-info__text">ЛЮБАЯ ИНФОРМАЦИЯ, ПРЕДСТАВЛЕННАЯ НА ДАННОМ САЙТЕ, НОСИТ ИСКЛЮЧИТЕЛЬНО ИНФОРМАЦИОННЫЙ ХАРАКТЕР И НИ ПРИ КАКИХ УСЛОВИЯХ НЕ ЯВЛЯЕТСЯ ПУБЛИЧНОЙ ОФЕРТОЙ, ОПРЕДЕЛЯЕМОЙ ПОЛОЖЕНИЯМИ СТАТЬИ 437 ГК РФ.</p>
                <div class="imp-info__wrapper">
                    <a class="imp-info__link" href="/" target="_blank" rel="noopener noreferrer">Политика приватности</a>
                    <a class="imp-info__link" href="/" target="_blank" rel="noopener noreferrer">Согласие на рассылку</a>
                    <a class="imp-info__link" href="/" target="_blank" rel="noopener noreferrer">Согласие на обработку персональных данных</a>
                </div>
            </div>
        </footer>

        <script src="/landings/excursions/js/jquery-3.5.1.js"></script>
        <script src="/landings/excursions/js/swiper-bundle.min.js"></script>
        <script src="/landings/excursions/js/app.js"></script>
    
        <x-include.modals></x-include.modals>
      </body>
</html>