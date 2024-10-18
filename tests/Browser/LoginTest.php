<?php

use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;

uses(DatabaseTruncation::class);

test('loads', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/login')
            ->assertSee('Einloggen');
    });
});

test('submits', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/register')
            ->type('name', 'John Doe')
            ->type('email', 'john.doe@example.com')
            ->type('password', 'secret123!')
            ->type('password_confirmation', 'secret123!')
            ->check('terms')
            ->check('newsletter')
            ->press("Los geht's!")
            ->assertPathIs('/dashboard')
                // Can't visit directly as /logout only accepts POST
            ->press('a[href$="/logout"]');

        $browser->visit('/login')
            ->type('email', 'john.doe@example.com')
            ->type('password', 'secret123!')
            ->press('Anmelden')
            ->assertPathIs('/dashboard');
    });
});
