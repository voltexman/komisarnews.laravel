<?php

namespace App\Livewire\Order;

use Livewire\Component;

class Photo extends Component
{
    public $photo;

    public $id;

    public function mount($photo, $id)
    {
        $this->photo = $photo;
        $this->id = $id;
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
