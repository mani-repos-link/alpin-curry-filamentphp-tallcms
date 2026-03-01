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
            'reservation_website' => '',
            'reservation_started_at' => now()->subMinutes(2)->timestamp,
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

    public function test_reservation_honeypot_blocks_spam_submission(): void
    {
        Mail::fake();

        $response = $this->post(route('reservations.store', ['locale' => 'en']), [
            'name' => 'Bot User',
            'email' => 'bot@example.com',
            'phone' => '+39 320 000 1111',
            'guests' => 2,
            'reservation_date' => now()->addDay()->format('Y-m-d'),
            'reservation_time' => '20:00',
            'message' => 'Spam',
            'reservation_website' => 'https://spam.example',
            'reservation_started_at' => now()->subMinutes(2)->timestamp,
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHasErrorsIn('reservation', ['reservation_website']);

        $this->assertDatabaseCount('reservations', 0);
        Mail::assertNothingSent();
    }

    public function test_reservation_rate_limit_returns_form_error(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Rate Limit User',
            'email' => 'limit@example.com',
            'phone' => '+39 320 000 2222',
            'guests' => 2,
            'reservation_date' => now()->addDay()->format('Y-m-d'),
            'reservation_time' => '21:00',
            'message' => 'Testing limits',
            'reservation_website' => '',
            'reservation_started_at' => now()->subMinutes(2)->timestamp,
        ];

        for ($attempt = 1; $attempt <= 5; $attempt++) {
            $this->post(route('reservations.store', ['locale' => 'en']), $payload)->assertRedirect();
        }

        $this->post(route('reservations.store', ['locale' => 'en']), $payload)
            ->assertStatus(429)
            ->assertSessionHasErrorsIn('reservation', ['form']);
    }
}
