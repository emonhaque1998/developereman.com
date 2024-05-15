<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Cache;
use App\Models\Project as ModelsProject;

class Project extends Component
{

    public $limit = 8;
    public $categories;

    public function mount(){
        $this->categories = Cache::remember('dev_categories_project', Carbon::now()->addDays(30), function () {
            return ProjectCategory::all();
        });
    }

    public function loadMore(){
        $this->limit += 4;
    }

    #[Title("Projects - Client Real Work")]
    public function render()
    {
        return view('livewire.project')->with([
            "projects" => ModelsProject::latest()->take($this->limit)->get()
        ]);
    }
}
