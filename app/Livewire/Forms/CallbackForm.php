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
    // #[Validate('numeric', message: 'no tel')]
    public $phone = '';

    public function toTelegram()
    {
        $this->validate();

        Telegraph::chat(env('TELEGRAM_CHAT_ID'))
            ->html('<b>Замовлення дзвінка</b> \n Телефон: ' . $this->phone . ' \n Зараз очікує дзвінка')
            ->send();

        $this->reset();
    }
}
