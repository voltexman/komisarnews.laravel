<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: env('APP_NAME').' - Замовлення',
            from: new Address(env('MAIL_FROM_ADDRESS'))
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.order',
            with: [
                'title' => 'Замовлення',
                'order' => $this->order,
                'newCount' => Order::where([
                    'status' => Order::STATUS_NEW,
                ])->count(),
                'processingCount' => Order::where([
                    'status' => Order::STATUS_PROCESSING,
                ])->count(),
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        $photoNames = json_decode($this->order['photos_names'], true);

        if ($photoNames !== null) {
            foreach ($photoNames as $photo) {
                $attachment[] = Attachment::fromPath(public_path('uploads/orders/'.$photo));
            }
        }

        return $attachments;
    }
}
