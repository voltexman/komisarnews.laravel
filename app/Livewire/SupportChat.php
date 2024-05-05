<?php

namespace App\Livewire;

use App\Livewire\Forms\ChatForm;
use Livewire\Attributes\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class SupportChat extends Component
{
    use WithFileUploads;

    public ChatForm $form;

    #[Session('chat-alert')]
    public $alert = true;

    public function closeAlert()
    {
        $this->alert = false;
    }

    public function save()
    {
        $this->form->reset();
    }

    public function render()
    {
        // session()->flush();

        return view('livewire.support-chat');
    }
}
