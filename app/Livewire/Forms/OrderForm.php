<?php

namespace App\Livewire\Forms;

use App\Enums\Order\OrderPurpose;
use App\Models\Order;
use Livewire\Attributes\Session;
use Livewire\Form;
use Livewire\WithFileUploads;

class OrderForm extends Form
{
    use WithFileUploads;

    #[Session]
    public string $purpose = OrderPurpose::SELL->value;

    #[Session]
    public ?string $name = '';

    #[Session]
    public string $city = '';

    #[Session]
    public ?string $email = '';

    #[Session]
    public string $phone = '';

    public $photos = [];

    #[Session]
    public $color = null;

    #[Session]
    public ?int $hair_weight = null;

    #[Session]
    public ?int $hair_length = null;

    #[Session]
    public ?int $age = null;

    #[Session]
    public $hair_options = [];

    #[Session]
    public string $description = '';

    public function store(): Order
    {
        dd($validated = $this->validate());

        // $this->reset();

        return Order::create($validated);
    }

    protected function rules(): array
    {
        return [
            'purpose' => 'required',
            'name' => 'nullable|min:2|max:40',
            'city' => 'required|min:2|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|min:5|max:20',
            'photos' => 'nullable|array',
            'color' => 'required|string',
            // 'hair_weight' => 'nullable|numeric|min:2|max:10',
            // 'hair_length' => 'required|numeric|min:2|max:4',
            // 'age' => 'nullable|numeric|min:2|max:2',
            // 'hair_options' => 'nullable|array',
            // 'description' => 'nullable|string',
        ];
    }

    protected function messages(): array
    {
        return [
            'name.min' => 'Введено замало символів',
            'city.required' => 'Вкажіть ваше місто',
            'city.min' => 'Введено замало символів',
            'phone.required' => 'Вкажіть номер телефону',
            'color.required' => 'Вкажіть колір волосся',
        ];
    }
}
