<?php

namespace App\Livewire\Order;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Photos extends Component
{
    use WithFileUploads;

    #[Validate(['photos.*' => 'image|max:2048'])]
    public $photos = [];

    public function placeholder()
    {
        return <<<'HTML'
        <div>loading
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.order.photos');
    }
}
