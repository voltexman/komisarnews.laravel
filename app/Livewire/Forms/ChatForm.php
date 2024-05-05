<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class ChatForm extends Form
{
    use WithFileUploads;

    const USER_ADMIN = 'administrator';

    const USER_CLIENT = 'client';

    #[Validate('required|min:5|max:1000')]
    public $message = '';

    // #[Validate(['photos.*' => 'image|max:1024'])]
    // public $photos = [];

    public function store($chat): void
    {
        $this->validate();

        session()->push('chat', [
            'user' => self::USER_CLIENT,
            'date' => now()->timestamp,
            'name' => 'name',
            'text' => $this->message,
        ]);
    }
}
