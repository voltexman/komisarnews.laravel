<?php

namespace App\Livewire\Forms;

use App\Models\Feedback;
use Livewire\Attributes\Validate;
use Livewire\Form;

class FeedbackForm extends Form
{
    #[Validate]
    public $name = '';

    #[Validate]
    public $contact = '';

    #[Validate]
    public $text = '';

    public function store()
    {
        $this->validate();

        Feedback::create($this->all());

        $this->reset();
    }

    public function rules()
    {
        return [
            'name' => 'string|required|min:2|max:40',
            'contact' => 'string|required|min:6|max:60',
            'text' => 'string|required|max:1500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Вкажіть ім`я',
            'name.min' => 'Мінімум 2 символи',
            'contact.required' => 'Вкажіть контакти',
            'contact.min' => 'Мінімум 6 символи',
            'text.required' => 'Напишіть листа',
        ];
    }
}
