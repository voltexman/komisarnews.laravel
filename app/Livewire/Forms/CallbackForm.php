<?php

namespace App\Livewire\Forms;

use DefStudio\Telegraph\Facades\Telegraph;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CallbackForm extends Form
{
    #[Validate('required', message: 'Необхідно вказати номер телефону')]
    #[Validate('min:5', message: 'Ви ввели замало цифр')]
    #[Validate('max:60', message: 'Ви ввели забагато цифр')]
    public $phone = '';

    public function toTelegram(int $phone)
    {
        $this->validate();

        // Telegraph::chat()->message($phone)->send();

        $this->reset();
    }
}
