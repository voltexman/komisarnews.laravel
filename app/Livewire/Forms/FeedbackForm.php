<?php

namespace App\Livewire\Forms;

use App\Models\Feedback;
use Livewire\Form;

class FeedbackForm extends Form
{
    public $name = '';

    public $contact = '';

    public $text = '';

    public function rules(): array
    {
        return [
            'name' => 'string|required|max:40',
            'contact' => 'string|required|max:60',
            'text' => 'string|required|max:1500',
        ];
    }

    public function messages(): array
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
