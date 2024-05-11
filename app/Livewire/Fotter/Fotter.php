<?php

namespace App\Livewire\Fotter;

use App\Models\Contact;
use Livewire\Component;

class Fotter extends Component
{
    public function render()
    {
        return view('livewire.fotter.fotter')->with([
            "contact" => Contact::latest()->first()
        ]);
    }
}
