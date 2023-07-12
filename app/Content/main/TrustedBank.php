<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class TrustedBank implements Arrayable
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
        src: 'banks/sber.svg',
      ))->getSrc(),
      (new Image(
        src: 'banks/mts.svg',
      ))->getSrc(),
      (new Image(
        src: 'banks/pochta.svg',
      ))->getSrc(),
      (new Image(
        src: 'banks/primsocbank.svg',
      ))->getSrc(),
      (new Image(
        src: 'banks/rosbank.svg',
      ))->getSrc(),
      (new Image(
        src: 'banks/rosselhoz.svg',
      ))->getSrc(),
      (new Image(
        src: 'banks/sngb.svg',
      ))->getSrc(),
      (new Image(
        src: 'banks/sovkombank.svg',
      ))->getSrc(),
      (new Image(
        src: 'banks/vtb.svg',
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
