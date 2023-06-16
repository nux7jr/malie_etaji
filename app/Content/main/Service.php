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
        'filter' => 'soprov',
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
            'title' => 'Страхование',
            'text' => 'Специальные условия для клиентов “Малые этажи”.'
          ],
        ]
      ],
      [
        'filter' => 'pro',
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
