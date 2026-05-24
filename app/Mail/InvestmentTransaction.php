<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvestmentTransaction extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$email,$amount,$package,$reference,$method;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$amount,$package,$reference)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->amount = $amount;
        $this->package = $package;
        $this->reference = $reference;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Investment Transaction',
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
            markdown: 'emails.InvestmentTransaction',
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
