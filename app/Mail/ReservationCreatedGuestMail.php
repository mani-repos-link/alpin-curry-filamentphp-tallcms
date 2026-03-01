<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationCreatedGuestMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public Reservation $reservation)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reservation Request Received - Alpin Curry'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.reservations.guest'
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
