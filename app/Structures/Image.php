<?php

namespace App\Structures;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Vite;

class Image implements Arrayable
{
    private ?string $asset_src;
    /**
     * @param string|null $src
     */
    public function __construct(?string $src){
        $this->asset_src = Vite::image($src);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'src'   => $this->asset_src,
        ];
    }

    /**
     * return Vite:asset || null path
     * @return string|null
     */
    public function getSrc(): string|null
    {
        return $this->asset_src;
    }
}
