<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;

class Order extends Component
{
    public OrderForm $order;

    public array $goals = [
        [
            'option' => 'Хочу оцінити вартість',
            'description' => 'Лише дізнатись ціну у майстра',
        ],
        [
            'option' => 'Хочу продати волосся',
            'description' => 'Відправити волосся та отримати гроші',
        ],
    ];

    public array $colors = [
        [
            'color' => '#fff',
            'option' => 'Блонд',
        ],
        [
            'color' => '#ccc',
            'option' => 'Світло-русий',
        ],
        [
            'color' => '#ff0000',
            'option' => 'Русий',
        ],
        [
            'color' => '#ff0000',
            'option' => 'Світло-коричневий',
        ],
        [
            'color' => '#ff0000',
            'option' => 'Темно-коричневий',
        ],
        [
            'color' => '#ff0000',
            'option' => 'Чорний',
        ],
    ];

    public function save()
    {
        // dd($this->order->all());
        // session()->flash('number', '25457');

        foreach ($this->order->photos as $photo) {
            $photo->store(path: 'photos');
        }

        $this->order->store();

    }

    public function render()
    {
        return view('livewire.order.stepper');
    }
}
