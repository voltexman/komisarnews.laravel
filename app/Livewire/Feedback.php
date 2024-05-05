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
        $this->feedback->store();

        $this->sendToMail();
        // $this->sendToTelegram();

        session()->flash('success');
    }

    public function sendToMail(): void
    {
        $sendFeedback = new SendFeedback($this->feedback->all());
        Mail::to(env('ADMIN_EMAIL'))->send($sendFeedback);
    }

    public function sendToTelegram(): void
    {
        //
    }

    public function render()
    {
        return view('livewire.feedback');
    }
}
