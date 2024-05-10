<?php

namespace App\Livewire\Home;

use App\Models\GlobalClientTitle;
use App\Models\GolobalClient as ModelsGolobalClient;
use Livewire\Component;

class GolobalClient extends Component
{
    public function render()
    {
        return view('livewire.home.golobal-client')->with([
            "clients" => ModelsGolobalClient::latest()->get(),
            "title" => GlobalClientTitle::latest()->first()
        ]);
    }
}
