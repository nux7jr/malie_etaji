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
        "video" => '/video/reels/2.mov',
        "preview" => (new Image(
          src: 'reels/2.jpg',
        ))->getSrc(),
      ],

      [
        "video" => '/video/reels/4.mov',
        "preview" => (new Image(
          src: 'reels/4.jpg',
        ))->getSrc(),
      ],

      [
        "video" => '/video/reels/5.mov',
        "preview" => (new Image(
          src: 'reels/5.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/6.mov',
        "preview" => (new Image(
          src: 'reels/6.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/7.mov',
        "preview" => (new Image(
          src: 'reels/7.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/8.mov',
        "preview" => (new Image(
          src: 'reels/8.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/9.mov',
        "preview" => (new Image(
          src: 'reels/9.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/10.mov',
        "preview" => (new Image(
          src: 'reels/10.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/11.mov',
        "preview" => (new Image(
          src: 'reels/11.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/12.mov',
        "preview" => (new Image(
          src: 'reels/12.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/13.mp4',
        "preview" => (new Image(
          src: 'reels/13.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/14.mp4',
        "preview" => (new Image(
          src: 'reels/14.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/15.mp4',
        "preview" => (new Image(
          src: 'reels/15.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/16.mp4',
        "preview" => (new Image(
          src: 'reels/16.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/19.mp4',
        "preview" => (new Image(
          src: 'reels/20.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/21.mp4',
        "preview" => (new Image(
          src: 'reels/21.jpg',
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
