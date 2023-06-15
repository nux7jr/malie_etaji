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
        '/video/reels/2.mov',
        '/video/reels/3.mov',
        '/video/reels/4.mov',
        '/video/reels/5.mov',
        '/video/reels/6.mov',
        '/video/reels/7.mov',
        '/video/reels/8.mov',
        '/video/reels/9.mov',
        '/video/reels/10.mov',
        '/video/reels/11.mov',
        '/video/reels/12.mov',


        '/video/reels/13.mp4',
        '/video/reels/14.mp4',
        '/video/reels/15.mp4',
        '/video/reels/16.mp4',
        '/video/reels/17.mp4',
        '/video/reels/18.mp4',
        '/video/reels/19.mp4',
        '/video/reels/20.mp4',
        '/video/reels/21.mp4',
        '/video/reels/22.mp4',
        '/video/reels/23.mp4',

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
