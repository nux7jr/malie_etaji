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
    protected static ?string $dataAttribute;
    public function __construct(?bool $header, ?string $link, ?string $text){
        self::$header   = (bool)$header;
        self::$link     = $link;
        self::$text     = $text;
    }
    public static function createClassWithDataAttribute(?bool $header, ?string $link, ?string $text, string $dataAttribute):self
    {
        $instance = new self(header:$header,link:$link,text:$text);
        $instance::$dataAttribute = $dataAttribute;
        return $instance;
    }

    /**
     * @param string|null $dataAttribute
     */
    public static function setDataAttribute(?string $dataAttribute): void
    {
        self::$dataAttribute = $dataAttribute;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'header'            => self::$header,
            'link'              => self::$link,
            'text'              => self::$text,
            'data-attribute'    => self::$dataAttribute
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
