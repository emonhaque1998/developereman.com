<?php

namespace App\Livewire;

use App\Models\AboutPage;
use Livewire\Component;
use Livewire\Attributes\Layout;

class About extends Component
{
    public function render()
    {
        return view('livewire.about')->with([
            "about" => AboutPage::latest()->first()
        ]);
    }
}
