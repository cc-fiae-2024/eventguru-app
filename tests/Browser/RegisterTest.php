<?php

use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;

uses(DatabaseTruncation::class);

test('loads', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/register')
                ->assertSee('Konto erstellen');
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
                ->assertPathIs('/dashboard');
    });
});
