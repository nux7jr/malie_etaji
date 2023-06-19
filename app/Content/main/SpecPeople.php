<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class SpecPeople implements Arrayable
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
        'image' => (new Image(
          src: 'people/sarvar.jpg',
        ))->getSrc(),
        'name' => __('Сарвар Джураев'),
        'spec' => __('Специалист отдела продаж'),
      ],
      [
        'image' => (new Image(
          src: 'people/alena.jpeg',
        ))->getSrc(),
        'name' => __('Алёна Крижановская'),
        'spec' => __('Ипотечный брокер'),
      ],
      [
        'image' => (new Image(
          src: 'people/vorobin.png',
        ))->getSrc(),
        'name' => __('Павел Воробин'),
        'spec' => __('Главный инженер'),
      ],
      [
        'image' => (new Image(
          src: 'people/popov.png',
        ))->getSrc(),
        'name' => __('Илья Попов'),
        'spec' => __('Специалист отдела продаж'),
      ],
      [
        'image' => (new Image(
          src: 'people/olga.png',
        ))->getSrc(),
        'name' => __('Ольга Демченко'),
        'spec' => __('Ипотечный брокер'),
      ],
      [
        'image' => (new Image(
          src: 'people/Aseev.png',
        ))->getSrc(),
        'name' => __('Андрей Асеев'),
        'spec' => __('Директор по строительству'),
      ],
      [
        'image' => (new Image(
          src: 'people/anna.png',
        ))->getSrc(),
        'name' => __('Анна Данилова'),
        'spec' => __('Специалист отдела продаж'),
      ],
      [
        'image' => (new Image(
          src: 'people/leader.jfif',
        ))->getSrc(),
        'name' => __('Владислав Горковенко'),
        'spec' => __('Руководитель отдела продаж'),
      ],

      // [
      //   'image' => (new Image(
      //     src: 'people/sarvar.jpg',
      //   ))->getSrc(),
      //   'name' => __('Максим Иващенко'),
      //   'spec' => __('Главный архитектор'),
      // ]
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
