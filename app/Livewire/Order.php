<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Order extends Component
{
    use WithFileUploads;

    public OrderForm $order;

    public array $goals = [
        [
            'icon' => 'circle-dollar-sign',
            'option' => 'Хочу оцінити вартість',
            'description' => 'Лише дізнатись ціну у майстра',
        ],
        [
            'icon' => 'handshake',
            'option' => 'Хочу продати волосся',
            'description' => 'Відправити волосся та отримати гроші',
        ],
    ];

    public array $colors = [
        [
            'label' => '#fff',
            'option' => 'Блонд',
        ],
        [
            'label' => '#ccc',
            'option' => 'Світло-русий',
        ],
        [
            'label' => '#ff0000',
            'option' => 'Русий',
        ],
        [
            'label' => '#ff0000',
            'option' => 'Світло-коричневий',
        ],
        [
            'label' => '#ff0000',
            'option' => 'Темно-коричневий',
        ],
        [
            'label' => '#ff0000',
            'option' => 'Чорний',
        ],
    ];

    public $selectedGoal = 0;

    public function selectGoal($index): void
    {
        $this->order->goal = $this->goals[$index]['option'];

        $this->selectedGoal = $index;
    }

    public function save()
    {
        dd($this->order->all());
        // session()->flash('number', '25457');
        $this->order->store();
    }

    public function render()
    {
        return view('livewire.order');
    }
}
