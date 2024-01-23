<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $contact ,$emailSettings;
    public function __construct($contact,$emailSettings)
    {
        $this->contact = $contact;
        $this->emailSettings = $emailSettings;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->from($this->emailSettings->email_username)->subject('Mail from Indus Hotel')
            ->view('email.contact');
    }



    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
