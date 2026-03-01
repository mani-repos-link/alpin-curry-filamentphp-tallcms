<?php

namespace Tests\Feature;

use App\Mail\ReservationCreatedAdminMail;
use App\Mail\ReservationCreatedGuestMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ReservationTest extends TestCase
{
    use RefreshDatabase;

    public function test_reservation_can_be_submitted_and_emails_are_sent(): void
    {
        config()->set('services.reservations.notify_email', 'owner@example.com');
        Mail::fake();

        $response = $this->post(route('reservations.store', ['locale' => 'en']), [
            'name' => 'Rahul Sharma',
            'email' => 'rahul@example.com',
            'phone' => '+39 320 000 0000',
            'guests' => 4,
            'reservation_date' => now()->addDay()->format('Y-m-d'),
            'reservation_time' => '19:30',
            'message' => 'Window seat if available.',
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHas('reservation_success');

        $this->assertDatabaseHas('reservations', [
            'email' => 'rahul@example.com',
            'status' => 'pending',
            'source' => 'website',
        ]);

        Mail::assertSent(ReservationCreatedAdminMail::class, function (ReservationCreatedAdminMail $mail): bool {
            return $mail->hasTo('owner@example.com');
        });

        Mail::assertSent(ReservationCreatedGuestMail::class, function (ReservationCreatedGuestMail $mail): bool {
            return $mail->hasTo('rahul@example.com');
        });
    }
}
