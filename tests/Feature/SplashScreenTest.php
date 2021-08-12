<?php

use App\Http\Livewire\Components\SplashScreen;
use function Pest\Laravel\get;
use function Pest\Livewire\livewire;

it('has splashscreen page')
    ->get('/')
    ->assertOk();

it('checks if SplashScreen Component was rendered', function () {
   $this->get('/')
       ->assertSeeLivewire('components.splash-screen');
});

