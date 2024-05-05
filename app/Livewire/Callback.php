<?php

namespace App\Livewire;

use App\Livewire\Forms\CallbackForm;
use Livewire\Component;

class Callback extends Component
{
    public CallbackForm $form;

    public function save(int $phone)
    {
        $this->form->toTelegram($phone);

        session()->flash('callback-success');
    }

    public function render()
    {
        return view('livewire.callback');
    }
}
