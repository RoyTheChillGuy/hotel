<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class HotelCreate extends Component
{
    #[Title('Add Hotel')]

    #[Validate('required|min:3')]
    public $name;

    #[Validate('required')]
    public $address;

    #[Validate('email')]
    public $email;
    
    #[Validate('required',message:'Nomor Telepon Harus Diisi')]
    public $phone;

    #[Validate('required|numeric')]
    public $stars;

    #[Validate('required')]
    public $check_in_time;
    public $check_out_time;
    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create(){
        $this->validate();
        Hotel::create($this->all());
        return $this->redirect('/hotels', navigate:true);
    }
}
