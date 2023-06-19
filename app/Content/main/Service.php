<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class Service implements Arrayable
{
  /**
   * Element use App\Structures\Image for build assets
   * @var array|array[]
   */
  private static array $card_elements;
  public function __construct()
  {
    self::$card_elements = [
      [
        'filter' => 'escort',
        'heading' => 'Сопровождение покупки',
        'data' => [
          [
            'icon' => 'service/1.svg',
            'title' => 'Ипотека',
            'text' => 'Минимальный пакет документов и индивидуальные программы для клиентов “Малые этажи”.'
          ],
          [
            'icon' => 'service/2.svg',
            'title' => 'Страхование',
            'text' => 'Специальные условия для клиентов “Малые этажи”.'
          ],
          [
            'icon' => 'service/3.svg',
            'title' => 'Подбор земельного участка',
            'text' => 'Поможем выбрать участок в поселках с развитой инфраструктурой.'
          ],
          [
            'icon' => 'service/4.svg',
            'title' => 'Выезд технолога на участок',
            'text' => 'Специалист выезжает на участок для оценки его состояния: несущая способность грунта, пучение грунта, возможное подтопление территории, наличие подземных вод, а так же перепад в пятне застройки.'
          ],
        ]
      ],
      [
        'filter' => 'design',
        'heading' => 'Проектирование',
        'data' => [
          [
            'icon' => 'service/5.svg',
            'title' => 'Разработка АТР',
            'text' => 'Технология применения каких-либо материалов или конструкций.'
          ],
          [
            'icon' => 'service/6.svg',
            'title' => 'Подготовка КР',
            'text' => 'Определяются материалы изготовления и назначение всех конструкций здания, которые определяют устойчивость сооружения, комфорт эксплуатации, безопасность людей и многие другие параметры.'
          ],
          [
            'icon' => 'service/7.svg',
            'title' => 'Страхование',
            'text' => 'Специальные условия для клиентов “Малые этажи”.'
          ],
        ]
      ],
    ];
  }
  /**
   * @return array
   */
  public function toArray(): array
  {
    return self::$card_elements;
  }
}
