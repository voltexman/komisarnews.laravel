<?php

namespace App\Livewire\Forms;

use App\Enums\Order\HairColors;
use App\Enums\Order\OrderPurpose;
use App\Models\Order;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Session;
use Livewire\Form;
use Livewire\WithFileUploads;

class OrderForm extends Form
{
    use WithFileUploads;

    #[Session]
    public $purpose = OrderPurpose::SELL->value;

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
    public $color = HairColors::BLOND->value;

    #[Session]
    public ?int $hair_weight = 20;

    #[Session]
    public ?int $hair_length = 40;

    #[Session]
    public ?int $age = null;

    #[Session]
    public $hair_options = [];

    #[Session]
    public string $description = '';

    public function store()
    {
        $validated = $this->validate();

        return Order::create($validated);
    }

    protected function rules(): array
    {
        return [
            'purpose' => ['required', Rule::enum(OrderPurpose::class)],
            'name' => 'nullable|string|min:2|max:40',
            'city' => 'required|string|min:2|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|string|min:5|max:20',
            'photos' => 'nullable|array',
            'color' => ['required', Rule::enum(HairColors::class)],
            'hair_weight' => 'nullable|numeric|min:20|max:160',
            'hair_length' => 'required|numeric|min:40|max:1500',
            'age' => 'nullable|numeric|min:18|max:70',
            'hair_options' => 'nullable|array',
            'description' => 'nullable|string|min:10|max:3000',
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
