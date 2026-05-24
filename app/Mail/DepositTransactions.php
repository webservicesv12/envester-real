<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DepositTransactions extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$amount,$status,$reference,$email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$amount,$status,$reference,$email)
    {
        //
        $this->name = $name;
        $this->amount = $amount;
        $this->status = $status;
        $this->reference = $reference;
        $this->email = $email;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Deposit Transactions',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.DepositTransactions',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
