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

    public function rules()
    {
        return [
            'name' => 'string|required|max:40',
            'contact' => 'string|required|max:60',
            'text' => 'string|required|max:1500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Вкажіть ім`я',
            'contact.required' => 'Вкажіть контакти',
            'text.required' => 'Напишіть листа',
        ];
    }

    public function store()
    {
        Feedback::create($this->all());
    }
}
