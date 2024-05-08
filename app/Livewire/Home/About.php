<?php

namespace App\Livewire\Home;

use App\Models\About as ModelsAbout;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.home.about')->with([
            "about" => ModelsAbout::latest()->first()
        ]);
    }
}
