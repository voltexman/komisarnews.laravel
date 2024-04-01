<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderForm extends Form
{
    public $goal = 'Хочу оцінити вартість';

    public $name = '';

    #[Validate]
    public $city = '';

    public $email = '';

    #[Validate]
    public $phone = '';

    public $photos = [];

    public $color = '';

    public $hair_weight = '';

    #[Validate]
    public $hair_length = '';

    public $age = '';

    public $hair_options = [];

    public $description = '';

    public function store()
    {
        // if ($this->photos) {

        //     foreach ($this->photos as $photo) {
        //         $validated['photos'] = $photo->store(path: 'photos');
        //     }
        // }

        $this->validate();

        $created = Order::create($this->all());

        session()->flash('number', $created->number);
    }

    public function rules()
    {
        return [
            'goal' => ['string|required', Rule::in([Order::GOAL_EVALUATE, Order::GOAL_SELL])],
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
