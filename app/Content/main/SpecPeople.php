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
          src: 'people/1.jpg',
        ))->getSrc(),
        'name' => __('Алёна Крижановская'),
        'spec' => __('Ипотечный брокер'),
      ],
      [
        'image' => (new Image(
          src: 'people/2.jpg',
        ))->getSrc(),
        'name' => __('Андрей Асеев'),
        'spec' => __('Директор по строительству'),
      ],
      [
        'image' => (new Image(
          src: 'people/3.jpg',
        ))->getSrc(),
        'name' => __('Анна Данилова'),
        'spec' => __('Специалист отдела продаж'),
      ],
      [
        'image' => (new Image(
          src: 'people/4.jpg',
        ))->getSrc(),
        'name' => __('Валерий Лохайкин'),
        'spec' => __('Архитектор'),
      ],
      [
        'image' => (new Image(
          src: 'people/5.jpg',
        ))->getSrc(),
        'name' => __('Валерия Трунова'),
        'spec' => __('Специалист колл-центра'),
      ],
      [
        'image' => (new Image(
          src: 'people/6.jpg',
        ))->getSrc(),
        'name' => __('Владимир Малышев'),
        'spec' => __('Архитектор'),
      ],
      [
        'image' => (new Image(
          src: 'people/7.jpg',
        ))->getSrc(),
        'name' => __('Владислав Горковенко'),
        'spec' => __('Руководитель отдела продаж'),
      ],
      [
        'image' => (new Image(
          src: 'people/8.jpg',
        ))->getSrc(),
        'name' => __('Дмитрий Билявский'),
        'spec' => __('Руководитель отдела безопасности'),
      ],
      [
        'image' => (new Image(
          src: 'people/9.jpg',
        ))->getSrc(),
        'name' => __('Илья Попов'),
        'spec' => __('Специалист отдела продаж'),
      ],
      [
        'image' => (new Image(
          src: 'people/10.jpg',
        ))->getSrc(),
        'name' => __('Максим Иващенко'),
        'spec' => __('Главный архитектор'),
      ],
      ['image' => (new Image(
          src: 'people/11.jpg',
        ))->getSrc(),
        'name' => __('Наталья Зверева'),
        'spec' => __('Специалист отдела логистики и снабжения'),
      ],

      [
        'image' => (new Image(
          src: 'people/12.jpg',
        ))->getSrc(),
        'name' => __('Олег Луганский'),
        'spec' => __('Руководитель отдела  по развитию'),
      ],
      [
        'image' => (new Image(
          src: 'people/13.jpg',
        ))->getSrc(),
        'name' => __('Ольга Демченко'),
        'spec' => __('Ипотечный брокер'),
      ],
      [
        'image' => (new Image(
          src: 'people/14.jpg',
        ))->getSrc(),
        'name' => __('Павел Воробин'),
        'spec' => __('Главный инженер'),
      ],
      [
        'image' => (new Image(
          src: 'people/15.jpg',
        ))->getSrc(),
        'name' => __('Руслан Юшиза'),
        'spec' => __('Конструктор'),
      ],
      [
        'image' => (new Image(
          src: 'people/16.jpg',
        ))->getSrc(),
        'name' => __('Сарвар Джураем'),
        'spec' => __('Специалист отдела продаж'),
      ],
      [
        'image' => (new Image(
          src: 'people/17.jpg',
        ))->getSrc(),
        'name' => __('Светлана Проценко'),
        'spec' => __('Маркетолог'),
      ],
      [
        'image' => (new Image(
          src: 'people/18.jpg',
        ))->getSrc(),
        'name' => __('Юлия Бармашова'),
        'spec' => __('Руководитель колл-центра'),
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
