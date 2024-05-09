<?php

namespace App\Livewire\Home;

use App\Models\Package as ModelsPackage;
use Livewire\Component;

class Package extends Component
{
    public function render()
    {
        return view('livewire.home.package')->with([
            "packages" => ModelsPackage::all()
        ]);
    }
}
