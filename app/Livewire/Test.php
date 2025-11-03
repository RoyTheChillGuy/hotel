<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Test extends Component
{
    #[Title("Test Doang")]

    public $name="Roy";

    public function mount($nama){
        $this->name = $nama;
    }

    
    public function render()
    {
        return view('livewire.test');
    }
    
    public $angka = 0;
    
    public function tambah(){
        $this->angka = $this->angka + 3;
    }
}
