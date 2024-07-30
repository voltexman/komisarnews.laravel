<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use DefStudio\Telegraph\Facades\Telegraph;
use Livewire\Component;

class Order extends Component
{
    public OrderForm $order;

    public function save()
    {
        //        foreach ($this->order->photos as $photo) {
        //            $photo->store(path: 'photos');
        //        }

        // $created = $this->order->store();
        // $this->sendToTelegram($created);

        session()->flash('number');

        $this->order->reset();
    }

    public function sendToTelegram($created): void
    {
        Telegraph::chat(env('TELEGRAM_CHAT_ID'))
            ->html(
                '<b>'.$this->order->goal."</b>\n".
                    '<b>Заявка: </b>'.$created->id."\n".
                    '<b>Ім`я: </b>'.$this->order->name."\n".
                    '<b>Місто: </b>'.$this->order->city."\n".
                    '<b>Пошта: </b>'.$this->order->email."\n".
                    '<b>Телефон: </b>'.$this->order->phone."\n".
                    "<b>Колір волосся: </b>\n".$this->order->color."\n".

                    '<b>Вага: </b>'.$this->order->hair_weight.', '.
                    '<b>Довжина: </b>'.$this->order->hair_length.', '.
                    '<b>Вік: </b>'.$this->order->age."\n".

                    "<b>Додатковий опис: </b>\n ".$this->order->description."\n"
            )->send();
    }

    public function placeholder()
    {
        return view('livewire.order.stepper-placeholder');
    }

    public function render()
    {
        return view('livewire.order.stepper');
    }
}
