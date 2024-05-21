<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Illuminate\Validation\Rule;
use Livewire\Form;

class OrderForm extends Form
{
    public $goal = 'Хочу оцінити вартість';

    public $name = '';

    public $city = '';

    public $email = '';

    public $phone = '';

    public $photos = [];

    public $color = 'Блонд';

    public $hair_weight = '';

    public $hair_length = '';

    public $age = '';

    public $hair_options = [];

    public $description = '';

    public function store()
    {
        $this->validate();

        $created = Order::create($this->all());

        session()->flash('number', $created->number);
    }

    public function rules(): array
    {
        return [
            'goal' => Rule::in([Order::GOAL_EVALUATE, Order::GOAL_SELL]),
            'name' => 'string|max:255',
            'city' => 'string|required|min:2|max:255',
            'email' => 'email|min:5',
            'phone' => 'string|required|min:5|max:20',
            'photos.*' => 'image',
            'color' => 'string|max:100',
            'hair_weight' => 'numeric|max:3',
            'hair_length' => 'numeric|required|max:3',
            'age' => 'numeric|max:2',
            'hair_options' => 'json',
            'description' => 'string|max:1500',
        ];
    }

    public function messages(): array
    {
        return [
            'city.required' => 'Необхідно вказати місто',
            'hair_length.required' => 'Вкажіть довжину',
            'phone.required' => 'Вкажіть номер телефону',
        ];
    }
}
