<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data)
    {
    }

    public function envelope(): Envelope
    {
        $subject = 'New DigiTexia inquiry';

        if (!empty($this->data['organization'])) {
            $subject .= ' - ' . $this->data['organization'];
        }

        return new Envelope(
            replyTo: [$this->data['email']],
            subject: $subject,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-inquiry',
            with: ['data' => $this->data],
        );
    }
}
