<?php

namespace App\Livewire;

use App\Livewire\Forms\SubscribeForm;
use Livewire\Component;

class Subscribe extends Component
{
    public SubscribeForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('subscribe-success');
    }

    public function render()
    {
        return view('livewire.subscribe');
    }
}
