<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Order extends Component
{
    use WithFileUploads;

    public OrderForm $order;

    public bool $rulesShow = false;

    public bool $rulesConfirm = false;

    public string $current = 'order.options';

    protected array $steps = [
        'order.person',
        'order.options',
        'order.photos',
        'order.description',
        'order.check',
    ];

    public function preview(): void
    {
        $currentIndex = array_search($this->current, $this->steps);

        $this->current = $this->steps[$currentIndex - 1];
    }

    public function next()
    {
        // $this->order->validate([
        //     'city' => 'required',
        // ]);

        $currentIndex = array_search($this->current, $this->steps);

        $this->current = $this->steps[$currentIndex + 1];
    }

    public function save()
    {
        //        foreach ($this->order->photos as $photo) {
        //            $photo->store(path: 'photos');
        //        }

        $created = $this->order->store();

        dd($created);

        session()->flash('number', $created->id);
    }

    public function placeholder()
    {
        return view('livewire.order.placeholder');
    }

    public function render()
    {
        return view('livewire.order.stepper');
    }
}
