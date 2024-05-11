<?php

namespace App\Livewire\About;

use App\Models\AboutPage;
use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        return view('livewire.about.banner')->with([
            "about" => AboutPage::latest()->first()
        ]);
    }
}
