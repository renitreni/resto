<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LandingPage extends Component
{
    public $tab = 1;

    public function render()
    {
        return view('livewire.landing-page')->layout('layouts.guest');
    }

    public function setTab($tab)
    {
        $this->tab = $tab;
    }
}
