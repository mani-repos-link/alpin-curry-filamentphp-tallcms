<?php

namespace Tests\Feature;

use App\Mail\ContactMessageAdminMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactTest extends TestCase
{
    public function test_contact_message_can_be_submitted(): void
    {
        config()->set('services.reservations.notify_email', 'owner@example.com');
        Mail::fake();

        $response = $this->post(route('contact.store', ['locale' => 'en']), [
            'contact_name' => 'Giulia Rossi',
            'contact_email' => 'giulia@example.com',
            'contact_phone' => '+39 320 111 2222',
            'contact_message' => 'Do you offer vegan options for groups?',
            'contact_website' => '',
            'contact_started_at' => now()->subMinutes(2)->timestamp,
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHas('contact_success');

        Mail::assertSent(ContactMessageAdminMail::class, function (ContactMessageAdminMail $mail): bool {
            return $mail->hasTo('owner@example.com');
        });
    }

    public function test_contact_honeypot_blocks_spam_submission(): void
    {
        Mail::fake();

        $response = $this->post(route('contact.store', ['locale' => 'en']), [
            'contact_name' => 'Spam Bot',
            'contact_email' => 'spam@example.com',
            'contact_phone' => '',
            'contact_message' => 'spam',
            'contact_website' => 'https://spam.example',
            'contact_started_at' => now()->subMinutes(2)->timestamp,
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHasErrorsIn('contact', ['contact_website']);

        Mail::assertNothingSent();
    }

    public function test_contact_rate_limit_returns_form_error(): void
    {
        config()->set('services.reservations.notify_email', 'owner@example.com');
        Mail::fake();

        $payload = [
            'contact_name' => 'Rate Contact',
            'contact_email' => 'contact-limit@example.com',
            'contact_phone' => '',
            'contact_message' => 'Testing contact limits',
            'contact_website' => '',
            'contact_started_at' => now()->subMinutes(2)->timestamp,
        ];

        for ($attempt = 1; $attempt <= 4; $attempt++) {
            $this->post(route('contact.store', ['locale' => 'en']), $payload)->assertRedirect();
        }

        $this->post(route('contact.store', ['locale' => 'en']), $payload)
            ->assertStatus(429)
            ->assertSessionHasErrorsIn('contact', ['form']);
    }
}
