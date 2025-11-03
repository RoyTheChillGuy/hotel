<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Contact extends Component
{
    #[Title("Contact")]
    public function render()
    {
        return view('livewire.contact');
    }
}
