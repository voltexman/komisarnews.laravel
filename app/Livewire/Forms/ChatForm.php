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
}
