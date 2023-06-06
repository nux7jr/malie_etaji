<?php

namespace App\Structures;


use Illuminate\Contracts\Support\Arrayable;

class Link implements Arrayable
{
    /**
     * @var bool
     */
    protected static bool $header;
    /**
     * @var string|null
     */
    protected static ?string $link;
    /**
     * @var string|null
     */
    protected static ?string $text;
    public function __construct(?bool $header, ?string $link, ?string $text){
        self::$header   = (bool)$header;
        self::$link     = $link;
        self::$text     = $text;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'header'    => self::$header,
            'link'      => self::$link,
            'text'      => self::$text,
        ];
    }

    /**
     * @return string
     */
    public function getlink(): string{
        return self::$link;
    }
    /**get string text for link
     * @return string
     */
    public function getText(): string{
        return self::$text;
    }
}
