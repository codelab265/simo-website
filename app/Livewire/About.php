<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;



class About extends Component
{
    public string $page = 'about';
    #[Title('About')]
    public function render()
    {
        return view('livewire.about')->layout('layouts.app');
    }
}
