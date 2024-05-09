<?php

namespace App\Livewire\Home;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public function render()
    {
        return view('livewire.home.project')->with([
            "projects" => ModelsProject::take(4)->get()
        ]);
    }
}
