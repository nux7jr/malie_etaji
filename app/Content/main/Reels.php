<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class Reels implements Arrayable
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
        (new Video(
          src: 'resources/images/reels/1.mov',
        ))->getSrc(),
        (new Video(
          src: 'resources/images/reels/2.mov',
        ))->getSrc(),
        (new Video(
          src: 'resources/images/reels/3.mov',
        ))->getSrc(),
        (new Video(
          src: 'resources/images/reels/4.mov',
        ))->getSrc(),
        (new Video(
          src: 'resources/images/reels/5.mov',
        ))->getSrc(),
        (new Video(
          src: 'resources/images/reels/6.mov',
        ))->getSrc(),
        (new Video(
          src: 'resources/images/reels/7.mov',
        ))->getSrc(),
        (new Video(
          src: 'resources/images/reels/8.mov',
        ))->getSrc(),
        (new Video(
          src: 'resources/images/reels/9.mov',
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
