<?php

namespace App\Livewire\Blog;

use App\Models\BlogCategory;
use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.blog.category')->with([
            "categories" => BlogCategory::all()
        ]);
    }
}
