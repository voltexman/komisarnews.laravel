<?php

namespace App\Livewire\Order;

use Livewire\Component;

class Person extends Component
{
    public $order;

    public function render()
    {
        return view('livewire.order.person');
    }
}
