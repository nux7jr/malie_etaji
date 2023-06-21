<?php

namespace App\Helpers\Senders\Interface;

use Illuminate\Http\Request;

interface SendFormInterface
{
    public function sendForm(array $data, Request $request);
}
