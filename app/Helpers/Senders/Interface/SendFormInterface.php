<?php

namespace App\Helpers\Senders\Interface;

use http\Env\Request;

interface SendFormInterface
{
    public function sendForm(array $data, Request $request);
}
