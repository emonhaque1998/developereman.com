<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use App\Models\ProjectCategory;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Project extends Component
{
    #[Layout('layouts.home')]
    public function render()
    {
        return view('livewire.project')->with([
            "projects" => ModelsProject::latest()->get(),
            "categories" => ProjectCategory::all()
        ]);
    }
}
