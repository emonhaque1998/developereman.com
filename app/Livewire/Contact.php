<?php

namespace App\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact')->with([
            "contact" => ModelsContact::latest()->first()
        ]);
    }
}
