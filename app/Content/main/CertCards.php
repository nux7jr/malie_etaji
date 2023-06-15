<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class CertCards implements Arrayable
{
  /**
   * Element use App\Structures\Image for build assets
   * @var array|array[]
   */
  private static array $card_elements;
  public function __construct()
  {
    self::$card_elements = [
      (new Image(
        src: 'cert/4.jpg',
      ))->getSrc(),
      (new Image(
        src: 'cert/5.jpg',
      ))->getSrc(),
      (new Image(
        src: 'cert/6.jpg',
      ))->getSrc(),
      (new Image(
        src: 'cert/7.jpg',
      ))->getSrc(),
      (new Image(
        src: 'cert/1.jfif',
      ))->getSrc(),
      (new Image(
        src: 'cert/2.jfif',
      ))->getSrc(),
      (new Image(
        src: 'cert/3.jfif',
      ))->getSrc(),

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
