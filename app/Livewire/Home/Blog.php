<?php

namespace App\Livewire\Home;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.home.blog')->with([
            "blogs" => ModelsBlog::latest()->take(2)->get()
        ]);
    }
}
