<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Layout;

class ProjectDetails extends Component
{
    public $project;

    public function mount($slug)
    {
        // Fetch the post by slug
        $this->project = Project::where('slug', $slug)->first();
    }


    #[Layout('layouts.home')]
    public function render()
    {
        return view('livewire.project-details');
    }
}
