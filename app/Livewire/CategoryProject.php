<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class CategoryProject extends Component
{

    public $project;

    public function mount($slug)
    {
        dump($slug);
    }

    #[Layout('layouts.home')]
    public function render()
    {
        return view('livewire.category-project');
    }
}
