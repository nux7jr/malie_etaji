<?php

namespace App\Content\Footer;

use App\Structures\Link;

final class Links
{
    /**
     * @var array|array[]
     */
    private static array $links;
    public function __construct(){
        self::$links = [
            [
                (new Link(header:true,link:'/projects',text:__('Проекты')))->toArray(),
                (new Link(null,link:'',text:__('Конструктор дома')))->toArray(),
                (new Link(null,link:'/projects/single',text:__('Одноэтажные')))->toArray(),
                (new Link(null,link:'/projects/double',text:__('Двухэтажные')))->toArray(),
                (new Link(null,link:'/projects/barn',text:__('Барны')))->toArray(),
                (new Link(null,link:'/projects/garage',text:__('С гаражом')))->toArray(),
                (new Link(header:true,link:'',text:__('Для клиентов')))->toArray(),
//                (new Link(null,link:'',text:__('Акции')))->toArray(),
                (new Link(null,link:'',text:__('Личный кабинет')))->toArray(),
                (new Link(null,link:'',text:__('Выдача ключей')))->toArray(),
                (new Link(null,link:'',text:__('Документы проектов')))->toArray(),
            ],
            [
                (new Link(header:true,link:'/mortgage',text:__('Ипотека')))->toArray(),
                (new Link(null,link:'/mortgage',text:__('Калькулятор ипотеки')))->toArray(),
                (new Link(null,link:'/mortgage/family#mortgage-programs',text:__('Семейная ипотека')))->toArray(),
                (new Link(null,link:'/mortgage/capital#mortgage-programs',text:__('Ипотека  под мат.капитал')))->toArray(),
                (new Link(null,link:'/mortgage/gos#mortgage-programs',text:__('Господдержка')))->toArray(),
                (new Link(null,link:'/mortgage/it#mortgage-programs',text:__('IT-ипотека')))->toArray(),
                (new Link(null,link:'/mortgage/away#mortgage-programs',text:__('Дальневосточная ипотека')))->toArray(),
                (new Link(null,link:'/mortgage/installment#mortgage-programs',text:__('Рассрочка')))->toArray(),
                (new Link(null,link:'/mortgage/military#mortgage-programs',text:__('Военная')))->toArray(),
                (new Link(null,link:'',text:__('Банки-партнеры')))->toArray(),
                (new Link(null,link:'',text:__('Страхование')))->toArray(),
                (new Link(null,link:'',text:__('Вопросы и ответы')))->toArray(),
            ],
            [
                (new Link(header:true,link:'/about',text:__('О компании')))->toArray(),
                (new Link(null,link:'',text:__('Услуги компании')))->toArray(),
                (new Link(null,link:'/about/technologies',text:__('Технологии строительства')))->toArray(),
                (new Link(null,link:'',text:__('Технологии партнеров')))->toArray(),
                (new Link(null,link:'',text:__('Экскурсия по объекту')))->toArray(),
                (new Link(null,link:'/live',text:__('Live-трансляция')))->toArray(),
                (new Link(null,link:'',text:__('Сертификаты')))->toArray(),
                (new Link(null,link:'',text:__('Отзывы клиентов')))->toArray(),
                (new Link(null,link:'/blog',text:__('Блог')))->toArray(),
                (new Link(null,link:'',text:__('Для инвесторов')))->toArray(),
                (new Link(null,link:'',text:__('Для риэлторов')))->toArray(),
                (new Link(null,link:'https://krasnoyarsk.hh.ru/employer/895977',text:__('Карьера')))->toArray(),
                (new Link(null,link:'',text:__('Офис продаж')))->toArray(),
            ],
        ];
    }

    /**
     * @return array|array[]
     */
    public static function getLinks(): array{
        return self::$links;
    }
}
