<?php

namespace App\Livewire\Forms;

use App\Models\Subscribe;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SubscribeForm extends Form
{
    #[Validate('required', message: 'Необхідно вказати пошту')]
    #[Validate('email', message: 'Невірно вказана пошта')]
    #[Validate('min:5', message: 'Ви ввели замало символів')]
    #[Validate('max:60', message: 'Ви ввели забагато символів')]
    public $email = '';

    public function store()
    {
        $this->validate();

        Subscribe::create($this->all());

        $this->reset();
    }
}
