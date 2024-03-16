<?php

namespace App\Livewire\Order;

use Livewire\Component;

class StepPerson extends Component
{
    public array $goalSelectOptions = [
        [
            'icon' => 'question-mark-circle',
            'value' => 'Хочу оцінити вартість',
            'description' => 'Лише дізнатись ціну у майстра',
        ],
        [
            'icon' => 'currency-dollar',
            'value' => 'Хочу продати волосся',
            'description' => 'Відправити волосся та отримати гроші',
        ],
    ];

    public function render()
    {
        return view('livewire.order.step-person', [
            'goalSelectOptions' => $this->goalSelectOptions
        ]);
    }
}
