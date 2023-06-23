<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;

class BuiltHouses implements Arrayable
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
        'filter' => 'single',
        'name' => 'Дом 6-03К',
        'about' => 'Общая площадь 80,7 м², площадь теплых помещений 69 м². В доме имеется две просторные спальни, в одной из которых расположен гардероб, кухня-гостиная с выходом на террасу, просторный санузел и комфортный тамбур.',
        'img' => [
          (new Image(
            src: 'built/1/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/1/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/1/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/1/4.jpg',
          ))->getSrc(),
        ],
        'info' => [
          'square' => '80,7',
          'time' => '7',
          'price' => '5 350 000'
        ]
      ],
      [
        'filter' => 'single',
        'name' => 'Дом 8-02К',
        'about' => 'Общая площадь дома 101,4 м², площадь теплых помещений 79 м². Красивый дом в стиле “Шале”, с витражными окнами, большой террасой, в доме расположено три спальни, просторная кухня-гостиная с высотой потолков 4 м, так же в доме имеется тамбур с тех помещением, общий гардероб и санузел.',
        'img' => [
          (new Image(
            src: 'built/2/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/2/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/2/3.jpg',
          ))->getSrc(),

        ],
        'info' => [
          'square' => '101',
          'time' => '5,5',
          'price' => '6 490 000'
        ]
      ],
      [
        'filter' => 'single',
        'name' => 'Дом 6-03К',
        'about' => 'Общая площадь 80,7 м², площадь теплых помещений 69 м². В доме была переделанная внутренняя планировка по заказу клиента, имеется две просторные спальни, два санузла, общий гардероб и кухня-гостиная с выходом на террасу.',
        'img' => [
          (new Image(
            src: 'built/3/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/3/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/3/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/3/4.jpg',
          ))->getSrc(),
        ],
        'info' => [
          'square' => '80',
          'time' => '6',
          'price' => '5 400 000'
        ]
      ],
      [
        'filter' => 'single',
        'name' => 'Дом 10-01С',
        'about' => 'Самый популярный проект нашей линейки типовых одноэтажных домов. Воплотил в себе идеальное сочетание оптимальной планировки, внешнего вида и стоимости дома. Большая кухня-гостиная 37, 3 кв.м. с выходом на террасу, 3 отдельных спальных помещения, совмещенный санузел, гардеробная и кладовая комнаты.',
        'img' => [
          (new Image(
            src: 'built/4/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/4/2.JPG',
          ))->getSrc(),
          (new Image(
            src: 'built/4/3.JPG',
          ))->getSrc()
        ],
        'info' => [
          'square' => '120',
          'time' => '4',
          'price' => '6 553 000'
        ]
      ],
      [
        'filter' => 'single',
        'name' => 'Дом 10-01С',
        'about' => 'Вариация нашего типового проекта с корректировками от заказчика. При сохранении внутренних планировочных решений изменился внешний вид дома. Терраса вынесена на передний план, в остальном - стандартная кухня-гостиная, 3 спальных комнаты, санузел и гардероб.',
        'img' => [
          (new Image(
            src: 'built/5/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/5/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/5/3.jpg',
          ))->getSrc(),

        ],
        'info' => [
          'square' => '120',
          'time' => '4',
          'price' => '5 572 000'
        ]
      ],
      [
        'filter' => 'barn',
        'name' => 'Барнхаус 60-78',
        'about' => 'Барнхаус 60-78, п. Вечерницы, Емельяновский район
        Очень приятный для визуального восприятия дом, яркое сочетание цветов отделочных материалов придают неповторимый облик этому проекту. При этом планировка дома повторяет комфорт и удобство трехкомнатной квартиры. Гостиная с панорамными окнами, две спальни, большая терраса.
        ',
        'img' => [
          (new Image(
            src: 'built/6/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/6/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/6/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'built/6/4.jpg',
          ))->getSrc(),
        ],
        'info' => [
          'square' => '77',
          'time' => '6',
          'price' => '4 763 000'
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