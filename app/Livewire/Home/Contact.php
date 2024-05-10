<?php

namespace App\Livewire\Home;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.home.contact')->with([
            "contact" => ModelsContact::latest()->first()
        ]);
    }
}
