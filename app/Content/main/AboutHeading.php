<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;


class AboutHeading implements Arrayable
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
          (new Link(null, link: "#building-maps", text: 'Карта построенных объектов'))->toArray(),
          (new Link(null, link: "#all-services", text: 'Услуги, которые мы предоставляем'))->toArray(),
          (new Link(null, link: "#gallery", text: 'Готовые объекты'))->toArray(),
          (new Link(null, link: "/about/technologies/#certificates", text: 'Сертификаты и лицензии'))->toArray(),
        ],
        'image' => (new Image(
          src: 'about/about.jpg',
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
