<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocalizedPagesTest extends TestCase
{
    public function test_localized_pages_load_successfully(): void
    {
        config()->set('services.menu.endpoint', '');

        $this->get('/it/menu')->assertStatus(200);
        $this->get('/de/gallery')->assertStatus(200);
        $this->get('/en/legal')->assertStatus(200);
        $this->get('/en/legal/privacy')->assertStatus(200);
        $this->get('/it/legal/cookies')->assertStatus(200);
        $this->get('/de/legal/impressum')->assertStatus(200);
        $this->get('/en/legal/terms')->assertStatus(200);
    }

    public function test_it_homepage_uses_localized_featured_labels_and_menu_prices(): void
    {
        config()->set('services.menu.endpoint', '');

        $response = $this->get('/it');

        $response
            ->assertStatus(200)
            ->assertSeeText('Piatti Signature')
            ->assertSeeText('Pollo al Burro')
            ->assertSeeText('€14.00');
    }
}
