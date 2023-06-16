<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;


class AboutGallery implements Arrayable
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
        (new Image(
          src: 'gallery/1.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/2.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/3.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/4.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/5.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/6.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/7.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/8.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/9.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/10.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/11.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/12.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/13.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/14.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/15.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/16.jpg',
        ))->getSrc(),
        (new Image(
          src: 'gallery/17.jpg',
        ))->getSrc()
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
