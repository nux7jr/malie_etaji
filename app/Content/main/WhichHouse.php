<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class WhichHouse implements Arrayable
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
                'text'     => __('Собственное современное производство SIP-панелей'),
                'background' => (new Image(
                    src: 'resources/images/barns/53-56/4.jpg',
                ))->getSrc(),
                'link' => (new Link(null, link: "/asd.pdf", text: 'Скачать в PDF'))->toArray(),
                'video' => (new Video(
                    src: 'resources/images/barns/53-56/video1.mp4',
                ))->getSrc(),
            ],
            [
                'text'     => __('О компании Малые этажи'),
                'background' => (new Image(
                    src: 'resources/images/barns/29-42/4.jpg',
                ))->getSrc(),
                'link' => (new Link(null, link: "/about", text: 'Подробнее'))->toArray(),
                'video' => (new Video(
                    src: 'resources/images/barns/29-42/video1.mp4',
                ))->getSrc()
            ],
            [
                'text'     => __('Рассчитайте ипотеку'),
                'background' => (new Image(
                    src: 'resources/images/double/75-92/2.jpg',
                ))->getSrc(),
                'link' => (new Link(null, link: "/mortgage/#mortgage-programs", text: 'Рассчитать'))->toArray(),
                'video' => (new Video(
                    src: 'resources/images/double/75-92/video1.mp4',
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
