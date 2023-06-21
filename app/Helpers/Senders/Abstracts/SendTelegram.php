<?php

namespace App\Helpers\Senders\Abstracts;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class SendTelegram
{
    /**
     * @var Client
     */
    protected static Client $guzzle;
    public function __construct(){
        self::$guzzle = new Client(
            config:[
                'base_uri'  => 'https://api.telegram.org/'.env('TELEGRAM_BOT_DEBUG').'/',
                'timeout'   => 4,
            ]
        );
    }

    /**
     * send message in telegram
     * @param string $mess
     * @param int|null $chat_id
     * @return void
     * @throws GuzzleException
     */
    protected static function sendTelegram(string $mess, ?int $chat_id): void
    {
        is_null($chat_id) ? $chat_id = env('TELEGRAM_CHAT_ID') : '';
        $response = self::$guzzle->post(
            uri:'https://api.telegram.org/'.env('TELEGRAM_BOT_DEBUG').'/sendMessage',
            options: [
                'method'    => 'POST',
                'query'      => [
                    'chat_id'   => $chat_id,
                    'text'      => $mess,
                ],
            ],
        );
    }
}
