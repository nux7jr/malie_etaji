<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;

class AdvantagesCard implements Arrayable
{
    /**
     * Element use App\Structures\Image for build assets
     * @var array|array[]
     */
    private static array $card_elements;
    public function __construct(){
        self::$card_elements = [
            [
                'img' => (new Image(
                src: 'resources/images/icons/icon1.svg',
                ))->getSrc(),
                'text'     => __('Собственное современное производство SIP-панелей'),
            ],
            [
                'img' => (new Image(
                    src: 'resources/images/icons/icon2.svg',
                ))->getSrc(),
                'text'     => __('Применение только экологически качественных материалов'),
            ],
            [
                'img' => (new Image(
                    src: 'resources/images/icons/icon3.svg',
                ))->getSrc(),
                'text'     => __('25 типовых ТОП-проектов'),
            ],
            [
                'img' => (new Image(
                    src: 'resources/images/icons/icon4.svg',
                ))->getSrc(),
                'text'     => __('Современный дизайн домов, продуманная планировка'),
            ],
            [
                'img' => (new Image(
                    src: 'resources/images/icons/icon5.svg',
                ))->getSrc(),
                'text'     => __('Услуги ипотечных брокеров'),
            ],
            [
                'img' => (new Image(
                    src: 'resources/images/icons/icon6.svg',
                ))->getSrc(),
                'text'     => __('Подбор земельных участков'),
            ],
            [
                'img' => (new Image(
                    src: 'resources/images/icons/icon7.svg',
                ))->getSrc(),
                'text'     => __('Строительство “Под ключ”'),
            ],
            [
                'img' => (new Image(
                    src: 'resources/images/icons/icon8.svg',
                ))->getSrc(),
                'text'     => __('Гарантия на строительные работы 5 лет'),
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
