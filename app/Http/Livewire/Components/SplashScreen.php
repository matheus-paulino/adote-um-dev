<?php

namespace App\Http\Livewire\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SplashScreen extends Component
{
    public function render(): Factory|View|Application
    {
        return view('livewire.components.splash-screen');
    }
}
