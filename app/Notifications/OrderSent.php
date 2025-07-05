<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class OrderSent extends Notification
{
    use Queueable;

    public object $order;

    public function __construct(object $order)
    {
        $this->order = $order;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'telegram'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Замовлення')
            ->line("**ID:** #{$this->order->id}")
            ->lineIf($this->order->name, "**Ім`я:** {$this->order->name}")
            ->line("**Місто:** {$this->order->city}")
            ->lineIf($this->order->email, "**E-Mail:** {$this->order->email}")
            ->line("**Телефон:** {$this->order->phone}")
            ->line("**Колір:** {$this->order->color->getLabel()}")
            ->lineIf($this->order->hair_weight, "**Вага:** {$this->order->hair_weight}".'гр.')
            ->line("**Довжина:** {$this->order->hair_length}".'см')
            ->lineIf($this->order->age, "**Вік:** {$this->order->age}".'р.')
            ->line('**Опції:** '.implode(',', $this->order->hair_options))
            ->lineIf($this->order->description, "**Додатковий опис:** {$this->order->description}");
    }

    public function toTelegram(object $notifiable): TelegramMessage
    {
        return TelegramMessage::create()
            ->line('*Замовлення*')
            ->line("*ID:* #{$this->order->id}")
            ->lineIf($this->order->name, "*Ім`я:* {$this->order->name}")
            ->line("*Місто:* {$this->order->city}")
            ->lineIf($this->order->email, "*E-Mail:* {$this->order->email}")
            ->line("*Телефон:* {$this->order->phone}")
            ->line("*Колір:* {$this->order->color->getLabel()}")
            ->lineIf((bool) $this->order->hair_weight, "*Вага:* {$this->order->hair_weight}".'гр.')
            ->line("*Довжина:* {$this->order->hair_length}".'см')
            ->lineIf((bool) $this->order->age, "*Вік:* {$this->order->age}".'р.')
            ->line('*Опції:* '.implode(',', $this->order->hair_options))
            ->lineIf($this->order->description, "*Додатковий опис:* {$this->order->description}");
    }
}
