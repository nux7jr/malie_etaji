<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class YourHouse implements Arrayable
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
        'title'     => __('Энергоэффективный дом'),
        'text'     => __('Низкое потребление энергии в сочетании с комфортным микроклиматом.'),
        'img' => (new Image(
          src: 'about/1.svg',
        ))->getSrc(),
      ],
      [
        'title'     => __('Быстрые сроки строительства'),
        'text'     => __('Строительство дома от 3 до 6 месяцев'),
        'img' => (new Image(
          src: 'about/2.svg',
        ))->getSrc(),
      ],
      [
        'title'     => __('Smart-планировки'),
        'text'     => __('Уникальные проекты домов  в которых продуман каждый нанометр'),
        'img' => (new Image(
          src: 'about/3.svg',
        ))->getSrc(),
      ],
      [
        'title'     => __('Экологичность'),
        'text'     => __('Строительные материалы  собственного производства класса экологичности - Е1'),
        'img' => (new Image(
          src: 'about/4.svg',
        ))->getSrc(),
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
