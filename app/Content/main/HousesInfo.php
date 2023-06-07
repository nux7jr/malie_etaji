<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class HousesInfo implements Arrayable
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
        'id' => __('1'),
        'name' => __('ДВ 72-92'),
        'category' => __('Двухэтажный'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'resources/images/double/72-92/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/72-92/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/72-92/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/72-92/4.jpg',
          ))->getSrc(),
        ],
        'price_end' => 4500000,
        'price_finish' => 6800000,
        'price_small' => __('от 4,2 млн ₽'),
        'item_info' => [
          'square' => '161',
          'floors' => '2',
          'bedrooms' => '4',
          'bathrooms' => '2',
          'ceiling' => '2,9м',
          'parking' => '2'
        ],
        'about' => [
          __('Lorem Ipsum - это текст, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной  для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.'),
          __('Lorem Ipsum - это текст, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной  для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.')
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'resources/images/double/72-92/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/72-92/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['С гаражом', 'С гаражом'],
        'preview' => [
          'plan' => ['someurltoplan', 'someurltoplan2', 'someurltoplan3'],
          'facade' => [
            (new Image(
              src: 'resources/images/double/72-92/5.jpg',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/double/72-92/6.jpg',
            ))->getSrc()
          ],
          '3d' => [
            (new Image(
              src: 'resources/images/double/72-92/video1.mp4',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/double/72-92/video1.mp4',
            ))->getSrc(),
          ]
        ],
        'peculiarities' => [
          'Качественный сервис и широта спектра услуг',
          'Просторный дом и доступная цена',
          'Удобная покупка и быстрая сдача',
          'Панорамное остекление',
          'Современные планировки',
          'Расположение и инфраструктура',
          'Качественный сервис и широта спектра услуг'
        ]
      ],
      [
        'id' => __('1'),
        'name' => __('ДВ 80-96'),
        'category' => __('Двухэтажный'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'resources/images/double/80-96/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/80-96/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/80-96/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/80-96/4.jpg',
          ))->getSrc(),
        ],
        'price_end' => 8000000,
        'price_finish' => 10800000,
        'price_small' => __('от 8,5 млн ₽'),
        'item_info' => [
          'square' => '161',
          'floors' => '2',
          'bedrooms' => '4',
          'bathrooms' => '2',
          'ceiling' => '2,9м',
          'parking' => '2'
        ],
        'about' => [
          __('Lorem Ipsum - это текст, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной  для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.'),
          __('Lorem Ipsum - это текст, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной  для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.')
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'resources/images/double/80-96/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/80-96/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['С гаражом', 'С гаражом'],
        'preview' => [
          'plan' => ['someurltoplan', 'someurltoplan2', 'someurltoplan3'],
          'facade' => [
            (new Image(
              src: 'resources/images/double/80-96/5.jpg',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/double/80-96/6.jpg',
            ))->getSrc()
          ],
          '3d' => [
            (new Image(
              src: 'resources/images/double/80-96/video1.mp4',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/double/75-92/video1.mp4',
            ))->getSrc(),
          ]
        ],
        'peculiarities' => [
          'Качественный сервис и широта спектра услуг',
          'Просторный дом и доступная цена',
          'Удобная покупка и быстрая сдача',
          'Панорамное остекление',
          'Современные планировки',
          'Расположение и инфраструктура',
          'Качественный сервис и широта спектра услуг'
        ]
      ]

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
