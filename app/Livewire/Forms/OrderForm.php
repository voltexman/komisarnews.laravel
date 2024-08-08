<?php

namespace App\Livewire\Forms;

use App\Enums\Order\Colors;
use App\Enums\Order\Goals;
use App\Models\Order;
use Illuminate\Validation\Rule;
use Livewire\Form;

class OrderForm extends Form
{
    public $goal = '';

    public $name = '';

    public $city = '';

    public $email = '';

    public $phone = '';

    public $photos = [];

    public $color = null;

    public $hair_weight = null;

    public $hair_length = null;

    public $age = null;

    // public $hair_options = [];

    public $description = '';

    public function store(): Order
    {
        $this->validate();

        return Order::create($this->all());
    }

    public function rules(): array
    {
        return [
            'goal' => ['required', Rule::in([Goals::EVALUATE, Goals::SELL])],
            // 'name' => 'string|max:255',
            // 'city' => 'string|required|min:2|max:255',
            // 'email' => 'email|min:5',
            // 'phone' => 'string|required|min:5|max:20',
            // 'photos.*' => 'image',
            'color' => ['required', Rule::in([Colors::BLOND, Colors::FAIR, Colors::LIGHT_FAIR, Colors::LIGHT_BROWN, Colors::DARK_BROWN, Colors::BLACK])],
            // 'hair_weight' => 'integer|max:4',
            // 'hair_length' => 'integer|required|max:4',
            // 'age' => 'integer|max:2',
            // 'hair_options' => 'json',
            // 'description' => 'string|max:1500',
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
