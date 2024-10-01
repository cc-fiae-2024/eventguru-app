<?php

use Laravel\Dusk\Browser;

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
                ->press("Los geht's!")
                ->assertPathIs('/dashboard');
    });
});
