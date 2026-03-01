<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageAdminMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    /**
     * @param  array<string, string|null>  $payload
     */
    public function __construct(public array $payload)
    {
    }

    public function envelope(): Envelope
    {
        $name = (string) ($this->payload['contact_name'] ?? 'Website visitor');

        return new Envelope(
            subject: 'New Contact Message - '.$name
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact.admin'
        );
    }

    /**
     * @return array<string, string>
     */
    public function attachments(): array
    {
        return [];
    }
}
