<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class SearchForm extends Form
{
    #[Validate('required')]
    public ?string $search = '';
}
