<?php

namespace App\Http\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class Handler extends WebhookHandler
{
    public function start(): void
    {
        $this->chat->message(
            "Доброго дня!\n".
                "Вас вітає KomisarNews.\n".
                'Ми будемо сповіщати Вас про нові статті'
        )->send();
    }

    public function admin($text): void
    {
        if ($text === 'key') {
            $this->chat->message('ти адмін')->send();
        } else {
            $this->chat->message('ти не адмін')->send();
        }
    }
}
