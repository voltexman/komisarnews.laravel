<?php

namespace App\Livewire\Order;

use Livewire\Component;

class StepOptions extends Component
{
    public $colors = [
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

    public function render()
    {
        return view('livewire.order.step-options', ['colors' => $this->colors]);
    }
}
