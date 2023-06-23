<!--Города-->
<div class="modal fade" id="cities" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="cities" style="height: 500px;">
                <div class="cities__picture"></div>
                <div class="cities__list_wrap">
                    <div class="cities__list">
                        <div class="cities__list__small">Выбор города</div>
                        <div class="cities__list__title">Из какого Вы города?</div>
                        <div class="cities__list__block">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "cities",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                    "AJAX_MODE" => "N",    // Включить режим AJAX
                                    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                    "CACHE_GROUPS" => "N",    // Учитывать права доступа
                                    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                    "CACHE_TYPE" => "A",    // Тип кеширования
                                    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                    "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                    "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                                    "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                                    "DISPLAY_NAME" => "Y",    // Выводить название элемента
                                    "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                                    "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                                    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                    "FIELD_CODE" => array(    // Поля
                                        0 => "DETAIL_TEXT",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",    // Фильтр
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                    "IBLOCK_ID" => "26",    // Код информационного блока
                                    "IBLOCK_TYPE" => "cities",    // Тип информационного блока (используется только для проверки)
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                    "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                                    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                    "NEWS_COUNT" => "200",    // Количество новостей на странице
                                    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                    "PAGER_TITLE" => "Новости",    // Название категорий
                                    "PARENT_SECTION" => "",    // ID раздела
                                    "PARENT_SECTION_CODE" => "",    // Код раздела
                                    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                    "PROPERTY_CODE" => array(    // Свойства
                                        0 => "PHONE",
                                        1 => "ADDRESS",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                                    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                                    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                                    "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                                    "SHOW_404" => "N",    // Показ специальной страницы
                                    "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                                    "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                    "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                                    "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                                    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>

                <button type="button" class="modal__close close" data-dismiss="modal" aria-label="Close">
                    <svg width="6.25rem" height="6.25rem">
                        <use xlink:href="/assets/build/img/svg-sprite.svg#icon-close" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>