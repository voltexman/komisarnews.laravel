<?php

namespace App\Livewire\Order;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Photos extends Component
{
    use WithFileUploads;

    public $order;

    public function mount(OrderForm $order)
    {
        $this->order = $order;
    }

    public function isMaxPhotos()
    {
        return count($this->order->photos) == env('MAX_ORDER_PHOTOS');
    }

    public function render()
    {
        return view('livewire.order.photos');
    }
}
