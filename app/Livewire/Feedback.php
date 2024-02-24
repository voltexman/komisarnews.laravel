<?php

namespace App\Livewire;

use App\Livewire\Forms\FeedbackForm;
use App\Mail\SendFeedback;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Feedback extends Component
{
    public FeedbackForm $feedback;

    public function save()
    {
        $this->feedback->validate();

        $this->feedback->store();

        Mail::to(env('ADMIN_EMAIL'))
            ->send(new SendFeedback($this->feedback->all()));

        $this->feedback->reset();

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.feedback');
    }
}
