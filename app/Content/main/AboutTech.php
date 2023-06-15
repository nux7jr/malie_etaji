<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;


class AboutTech implements Arrayable
{
  /**
   * Element use App\Structures\Image for build assets
   * @var array|array[]
   */
  private static array $card_elements;
  public function __construct()
  {
    self::$card_elements =
      [
        'heading'     => __('ФСК Малые Этажи'),
        'text' => __('Сроим современные дома для жизни на природе. Мы разработали уникальные и продуманные проектные решения домов. Собственное производство строительных материалов, строительство домов «под ключ» по самой энергоэффективной технологии. Гарантия на строительные работы 5 лет.'),
        'links_list' =>
        [
          (new Link(null, link: "#technologies", text: 'Технологии строительства'))->toArray(),
          (new Link(null, link: "#partners", text: 'Технологии партнеров'))->toArray(),
          (new Link(null, link: "#stage", text: 'Этапы строительства'))->toArray(),
          (new Link(null, link: "/live", text: 'Live-трансляция строительства'))->toArray(),
        ],
        'image' => (new Image(
          src: 'about/sip.jpg',
        ))->getSrc(),
      ];
    // !img!


  }
  /**
   * @return array
   */
  public function toArray(): array
  {
    return self::$card_elements;
  }
}
