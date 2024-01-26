<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QueryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $query, $emailSettings;
    public function __construct($query, $emailSettings)
    {
        $this->query = $query;
        $this->emailSettings = $emailSettings;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->from($this->emailSettings->email_username)->subject('Mail from Indus Hotel')
            ->view('email.query');
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
