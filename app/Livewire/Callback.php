<?php

namespace App\Livewire;

use App\Livewire\Forms\CallbackForm;
use Livewire\Component;

class Callback extends Component
{
    public CallbackForm $form;

    public function save()
    {
        $this->form->toTelegram();

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.callback');
    }
}
