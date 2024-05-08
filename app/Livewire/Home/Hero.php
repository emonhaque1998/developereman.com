<?php

namespace App\Livewire\Home;

use App\Models\Hero as ModelsHero;
use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        return view('livewire.home.hero')->with([
            "hero" => ModelsHero::latest()->first()
        ]);
    }
}
