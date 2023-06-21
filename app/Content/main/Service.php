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
        'heading' => 'Сопровождение',
        'icon' => (new Image(
          src: 'service/services-9.svg',
        ))->getSrc(),
        'title' => 'Ипотека',
        'text' => 'Минимальный пакет документов и индивидуальные программы для клиентов “Малые этажи”.'
      ],
      [
        'filter' => 'escort',
        'heading' => 'Сопровождение',
        'icon' => (new Image(
          src: 'service/services-8.svg',
        ))->getSrc(),
        'title' => 'Страхование',
        'text' => 'Специальные условия для клиентов “Малые этажи”.'
      ],
      [
        'filter' => 'escort',
        'heading' => 'Сопровождение',
        'icon' => (new Image(
          src: 'service/services-7.svg',
        ))->getSrc(),
        'title' => 'Подбор земельного участка',
        'text' => 'Поможем выбрать участок в поселках с развитой инфраструктурой.'
      ],
      [
        'filter' => 'escort',
        'heading' => 'Сопровождение',
        'icon' => (new Image(
          src: 'service/services-6.svg',
        ))->getSrc(),
        'title' => 'Выезд технолога на участок',
        'text' => 'Специалист выезжает на участок для оценки его состояния: несущая способность грунта, пучение грунта, возможное подтопление территории, наличие подземных вод, а так же перепад в пятне застройки.'
      ],
      [
        'filter' => 'design',
        'heading' => 'Проектирование',
        'icon' => (new Image(
          src: 'service/services-5.svg',
        ))->getSrc(),
        'title' => 'Разработка АТР',
        'text' => 'Технология применения каких-либо материалов или конструкций.'
      ],
      [
        'filter' => 'design',
        'heading' => 'Проектирование',
        'icon' => (new Image(
          src: 'service/services-4.svg',
        ))->getSrc(),
        'title' => 'Подготовка КР',
        'text' => 'Определяются материалы изготовления и назначение всех конструкций здания, которые определяют устойчивость сооружения, комфорт эксплуатации, безопасность людей и многие другие параметры.'
      ],
      [
        'filter' => 'design',
        'heading' => 'Проектирование',
        'icon' => (new Image(
          src: 'service/services-3.svg',
        ))->getSrc(),
        'title' => 'Проект сметной документации',
        'text' => 'Комплекс документов, раскрывающих сущность проекта и содержащих обоснование его целесообразности и реализуемости.'
      ],
      [
        'filter' => 'building',
        'heading' => 'Строительство',
        'icon' => (new Image(
          src: 'service/services-2.svg',
        ))->getSrc(),
        'title' => 'Возведение дома',
        'text' => 'Установка фундамента и коробки дома из SIP-панелей.'
      ],
      [
        'filter' => 'building',
        'heading' => 'Строительство',
        'icon' => (new Image(
          src: 'service/services-1.svg',
        ))->getSrc(),
        'title' => 'Отделка дома',
        'text' => 'Кровельные работы любой сложности, отделка фасада и внутри дома под обои, установка окон и входных дверей.'
      ],
      [
        'filter' => 'building',
        'heading' => 'Строительство',
        'icon' => (new Image(
          src: 'service/services.svg',
        ))->getSrc(),
        'title' => 'Инженерные коммуникации',
        'text' => 'Устройство скважин и септиков, монтаж инженерных сетей, отопление и водоснабжение, канализация, вентиляция, электрика.'
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
