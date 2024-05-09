<?php

namespace App\Livewire\Home;

use App\Models\Service as ModelsService;
use Livewire\Component;

class Service extends Component
{
    public function render()
    {
        return view('livewire.home.service')->with([
            "services" => ModelsService::all()
        ]);
    }
}
