<?php

namespace App\Livewire;

use App\Models\ProjectCategory;
use Livewire\Component;
use Livewire\Attributes\Layout;

class CategoryProject extends Component
{

    public $projects;
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
        $category = ProjectCategory::with(['project' => function ($query) {
            $query->take(8);
        }])->where("slug", $slug)->first();
        $this->projects = $category->project;
    }

    public function render()
    {
        return view('livewire.category-project');
    }
}
