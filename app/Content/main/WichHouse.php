<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;

class WhitchHouse implements Arrayable
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
                    src: 'resources/images/barns/Барн 53-56/Картинки местность/4.jpg',
                ))->getSrc(),
                'link' => (new Link(null, link: "/asd.pdf", text: 'Скачать в PDF'))->toArray()
            ],
            [
                'text'     => __('Собственное современное производство SIP-панелей'),
                'background' => (new Image(
                    src: 'resources/images/barns/Барн 53-56/Картинки местность/4.jpg',
                ))->getSrc(),
                'link' => (new Link(null, link: "/asd.pdf", text: 'Скачать в PDF'))->toArray()
            ],
            [
                'text'     => __('Собственное современное производство SIP-панелей'),
                'background' => (new Image(
                    src: 'resources/images/barns/Барн 53-56/Картинки местность/4.jpg',
                ))->getSrc(),
                'link' => (new Link(null, link: "/asd.pdf", text: 'Скачать в PDF'))->toArray()
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
