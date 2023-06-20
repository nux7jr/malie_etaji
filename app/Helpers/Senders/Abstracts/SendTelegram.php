<?php

namespace App\Helpers\Senders\Abstracts;

use GuzzleHttp\Client;

abstract class SendTelegram
{
    /**
     * @var Client
     */
    protected static Client $guzzle;

    /**
     * send message in telegram
     * @param string $mess
     * @param int|null $chat_id
     * @return void
     * @throws \GuzzleHttp\Exception\GuzzleException
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
