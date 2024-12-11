<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Order;
use App\Enums\Order\Goals;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class OrderForm extends Form
{
    use WithFileUploads;

    public $goal = '';

    #[Rule('min:2', message: 'Введено замало символів')]
    #[Rule('max:40')]
    public $name = '';

    #[Rule('required', message: 'Вкажіть ваше місто')]
    #[Rule('min:2', message: 'Введено замало символів')]
    #[Rule('max:255')]
    public $city = '';

    #[Rule()]
    public $email = '';

    #[Rule('required', message: 'Вкажіть номер телефону')]
    #[Rule('required|min:5|max:20')]
    public $phone = '';

    #[Rule()]
    public $photos = [];

    #[Rule('required', message: 'Вкажіть колір волосся')]
    public $color = null;

    #[Rule('numeric|min:2|max:10')]
    public $hair_weight = null;

    #[Rule('numeric|required|min:2|max:4')]
    public $hair_length = null;

    #[Rule('numeric|min:2|max:2')]
    public $age = null;

    public $hair_options = [];

    public $description = '';

    public function store(): Order
    {
        $this->validate();

        return Order::create($this->all());
    }

    public function rules(): array
    {
        return [
            // 'goal' => ['required', Rule::in([Goals::EVALUATE, Goals::SELL])],
            // 'email' => 'email|min:5',
            // 'photos.*' => 'image',
            // 'hair_options' => 'json',
            // 'description' => 'string|max:1500',
        ];
    }
}
