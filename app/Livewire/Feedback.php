<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\SendFeedback;
use App\Livewire\Forms\FeedbackForm;
use Illuminate\Support\Facades\Mail;
use DefStudio\Telegraph\Facades\Telegraph;

class Feedback extends Component
{
    public FeedbackForm $feedback;

    public function save()
    {
        $this->feedback->store();

        $this->sendToTelegram();
        $this->sendToMail();

        session()->flash('success');
    }

    public function sendToTelegram(): void
    {
        Telegraph::chat(env('TELEGRAM_CHAT_ID'))
            ->html(
                "<b>Зворотній зв`язок</b>\n" .
                    '<b>Ім`я: </b>' . $this->feedback->name . "\n" .
                    '<b>Контакт: </b>' . $this->feedback->contact . "\n" .
                    '<b>Повідомлення: </b>' . $this->feedback->text . "\n"
            )->send();
    }

    public function sendToMail(): void
    {
        $sendFeedback = new SendFeedback($this->feedback->all());
        Mail::to(env('ADMIN_EMAIL'))->send($sendFeedback);
    }

    public function render()
    {
        return view('livewire.feedback');
    }
}
