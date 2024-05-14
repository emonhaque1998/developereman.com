<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use App\Models\ProjectCategory;
use Livewire\Component;

class Project extends Component
{

    public $limit = 8;

    public function loadMore(){
        $this->limit += 4;
    }

    public function render()
    {
        return view('livewire.project')->with([
            "projects" => ModelsProject::latest()->take($this->limit)->get(),
            "categories" => ProjectCategory::all()
        ]);
    }
}
