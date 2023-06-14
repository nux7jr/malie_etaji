<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class Sip implements Arrayable
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
        (new Image(
          src: 'resources/images/sip/1.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/2.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/3.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/4.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/5.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/6.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/7.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/8.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/9.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/10.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/11.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/12.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/13.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/14.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/15.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/16.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/17.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/18.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/19.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/20.jpg',
        ))->getSrc(),
        (new Image(
          src: 'resources/images/sip/21.jpg',
        ))->getSrc()
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
