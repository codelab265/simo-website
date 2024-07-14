<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Service extends Component
{
    #[Title('Our Services')]
    public function render()
    {
        return view('livewire.service')->layout('layouts.app');
    }
}
