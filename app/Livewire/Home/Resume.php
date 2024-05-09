<?php

namespace App\Livewire\Home;

use App\Models\Resume as ModelsResume;
use Livewire\Component;

class Resume extends Component
{
    public function render()
    {
        return view('livewire.home.resume')->with([
            "resumes" => ModelsResume::all()
        ]);
    }
}
