<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Portfolio extends Component
{
    #[Title('Portfolio')]
    public function render()
    {
        return view('livewire.portfolio')->layout('layouts.app');
    }
}
