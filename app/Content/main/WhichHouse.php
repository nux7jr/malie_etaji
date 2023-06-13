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
                'text'     => __('Скачайте полный каталог'),
                'background' => (new Image(
                    src: 'resources/images/home/catal.png',
                ))->getSrc(),
                'link' => (new Link(null, link: "/asd.pdf", text: 'Скачать в PDF'))->toArray(),
                'video' => '',
            ],
            [
                'text'     => __('О компании Малые этажи'),
                'background' => (new Image(
                    src: 'resources/images/barns/29-42/4.jpg',
                ))->getSrc(),
                'link' => (new Link(null, link: "/about", text: 'Подробнее'))->toArray(),
                'video' => (new Video(
                    src: 'resources/images/house/home.mp4',
                ))->getSrc()
            ],
            [
                'text'     => __('Рассчитайте ипотеку'),
                'background' => (new Image(
                    src: 'resources/images/home/mont.jpg',
                ))->getSrc(),
                'link' => (new Link(null, link: "/mortgage/#mortgage-programs", text: 'Рассчитать'))->toArray(),
                'video' => ''
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
