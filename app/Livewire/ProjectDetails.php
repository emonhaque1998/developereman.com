<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Title;

class ProjectDetails extends Component
{
    public $project;

    public function mount($slug)
    {
        // Fetch the post by slug
        $this->project = Project::where('slug', $slug)->first();
    }

    #[Title("Project Details")]
    public function render()
    {
        return view('livewire.project-details');
    }
}
