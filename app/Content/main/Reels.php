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
        "video" => '/video/reels/13.mov',
        "preview" => (new Image(
          src: 'reels/13.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/14.mov',
        "preview" => (new Image(
          src: 'reels/14.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/15.mov',
        "preview" => (new Image(
          src: 'reels/15.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/16.mov',
        "preview" => (new Image(
          src: 'reels/16.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/17.mov',
        "preview" => (new Image(
          src: 'reels/17.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/18.mov',
        "preview" => (new Image(
          src: 'reels/18.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/19.mov',
        "preview" => (new Image(
          src: 'reels/19.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/20.mov',
        "preview" => (new Image(
          src: 'reels/20.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/21.mov',
        "preview" => (new Image(
          src: 'reels/21.jpg',
        ))->getSrc(),
      ],
      [
        "video" => '/video/reels/22.mov',
        "preview" => (new Image(
          src: 'reels/22.jpg',
        ))->getSrc(),
      ],



      // '/video/reels/2.mov',
      // '/video/reels/3.mov',
      // '/video/reels/4.mov',
      // '/video/reels/5.mov',
      // '/video/reels/6.mov',
      // '/video/reels/7.mov',
      // '/video/reels/8.mov',
      // '/video/reels/9.mov',
      // '/video/reels/10.mov',
      // '/video/reels/11.mov',
      // '/video/reels/12.mov',
      // '/video/reels/13.mp4',
      // '/video/reels/14.mp4',
      // '/video/reels/15.mp4',
      // '/video/reels/16.mp4',
      // '/video/reels/17.mp4',
      // '/video/reels/19.mp4',
      // '/video/reels/20.mp4',
      // '/video/reels/21.mp4',
      // '/video/reels/22.mp4',

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
