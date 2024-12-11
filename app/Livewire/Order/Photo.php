<?php

namespace App\Livewire\Order;

use Livewire\Component;

class Photo extends Component
{
    public $order;

    public function mount($order)
    {
        $this->order = $order;
    }

    public function placeholder()
    {
        return view('livewire.order.photo-placeholder');
    }

    public function render()
    {
        return view('livewire.order.photo');
    }
}
