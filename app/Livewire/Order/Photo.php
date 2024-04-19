<?php

namespace App\Livewire\Order;

use Livewire\Component;

class Photo extends Component
{
    public $photo;

    public function mount($photo)
    {
        $this->photo = $photo;
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            loading...
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.order.photo');
    }
}
