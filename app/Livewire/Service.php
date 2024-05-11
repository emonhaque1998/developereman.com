<?php

namespace App\Livewire;

use App\Models\ServicePage;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Service extends Component
{
    public function render()
    {
        return view('livewire.service')->with([
            "service" => ServicePage::latest()->first()
        ]);
    }
}
