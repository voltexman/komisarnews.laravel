<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\OrderForm;
use DefStudio\Telegraph\Facades\Telegraph;

class Order extends Component
{
    public OrderForm $order;

    public array $goals = [
        ['option' => 'Хочу оцінити вартість', 'description' => 'Лише дізнатись ціну у майстра'],
        ['option' => 'Хочу продати волосся', 'description' => 'Відправити волосся та отримати гроші'],
    ];

    public array $colors = [
        ['color' => '#fff', 'option' => 'Блонд'],
        ['color' => '#ccc', 'option' => 'Світло-русий'],
        ['color' => '#ff0000', 'option' => 'Русий'],
        ['color' => '#ff0000', 'option' => 'Світло-коричневий'],
        ['color' => '#ff0000', 'option' => 'Темно-коричневий'],
        ['color' => '#ff0000', 'option' => 'Чорний'],
    ];

    public function placeholder()
    {
        return view('livewire.order.stepper-placeholder');
    }

    public function save()
    {
        //        foreach ($this->order->photos as $photo) {
        //            $photo->store(path: 'photos');
        //        }


        $this->toTelegram();
        // $this->order->store();

        session()->flash('number', '25457');
    }

    public function toTelegram()
    {
        Telegraph::chat(env('TELEGRAM_CHAT_ID'))
            ->html(
                "<b>" . $this->order->goal . "</b>\n" .
                    'Ім`я: ' . $this->order->name . "\n"
                // 'Зараз очікує дзвінка'
            )->send();
    }

    public function render()
    {
        return view('livewire.order.stepper');
    }
}
