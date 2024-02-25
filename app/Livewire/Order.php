<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Order extends Component
{
    use WithFileUploads;

    public OrderForm $order;

    public function save()
    {
        dd($this->order->all());
        $this->order->store();
    }

    public function render()
    {
        return view('livewire.order');
    }
}
