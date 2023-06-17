<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.base.home-component')->layout("layouts.guest");
    }
}
