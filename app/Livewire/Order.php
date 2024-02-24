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
        // $this->order->validate();
        // $this->order->store();

        // if ($this->photos) {
        //     session()->flash('number', '32405');
        //     dd($this->all());
        // }

        dd($this->order->all());

        // session()->flash('number', '32405');
    }

    public function render()
    {
        // session()->flash('number', '32405');

        return view('livewire.order');
    }
}
