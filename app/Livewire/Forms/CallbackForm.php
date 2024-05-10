<?php

namespace App\Livewire\Forms;

use DefStudio\Telegraph\Facades\Telegraph;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CallbackForm extends Form
{
    #[Rule('required', message: 'Необхідно вказати номер телефону')]
    #[Rule('min:5', message: 'Ви ввели замало цифр')]
    #[Rule('max:60', message: 'Ви ввели забагато цифр')]
    // #[Validate('numeric', message: 'no tel')]
    public $phone = '';

    public function toTelegram()
    {
        $this->validate();

        Telegraph::chat(env('TELEGRAM_CHAT_ID'))
            ->html("<b>Прохання передзвонити</b>\n" .
                'Телефон: ' . $this->phone . "\n" .
                'Зараз очікує дзвінка')
            ->send();

        session()->flash('callback-phone', $this->phone);

        $this->reset();
    }
}
