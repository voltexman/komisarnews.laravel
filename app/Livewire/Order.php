<?php

namespace App\Livewire;

use App\Enums\Order\Colors;
use App\Enums\Order\Goals;
use App\Livewire\Forms\OrderForm;
use DefStudio\Telegraph\Facades\Telegraph;
use Livewire\Component;

class Order extends Component
{
    public OrderForm $order;

    public $goals;

    public $colors;

    public function mount()
    {
        $this->goals = Goals::cases();
        $this->colors = Colors::cases();
    }

    public function placeholder()
    {
        return view('livewire.order.stepper-placeholder');
    }

    public function save()
    {
        //        foreach ($this->order->photos as $photo) {
        //            $photo->store(path: 'photos');
        //        }

        $number = $this->order->store();
        $this->toTelegram($number);
    }

    public function toTelegram(int $number)
    {
        Telegraph::chat(env('TELEGRAM_CHAT_ID'))
            ->html(
                '<b>' . $this->order->goal . "</b>\n" .
                    '<b>Заявка: </b>' . $number . "\n" .
                    '<b>Ім`я: </b>' . $this->order->name . "\n" .
                    '<b>Місто: </b>' . $this->order->city . "\n" .
                    '<b>Пошта: </b>' . $this->order->email . "\n" .
                    '<b>Телефон: </b>' . $this->order->phone . "\n" .
                    "<b>Колір волосся: </b>\n" . $this->order->color . "\n" .

                    '<b>Вага: </b>' . $this->order->hair_weight . ', ' .
                    '<b>Довжина: </b>' . $this->order->hair_length . ', ' .
                    '<b>Вік: </b>' . $this->order->age . "\n" .

                    "<b>Додатковий опис: </b>\n " . $this->order->description . "\n"
            )->send();
    }

    public function render()
    {
        return view('livewire.order.stepper');
    }
}
