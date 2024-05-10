<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class LatestNews extends Component
{
    public function render()
    {
        return view('livewire.blog.latest-news')->with([
            "blogs" => Blog::latest()->take(3)->get()
        ]);
    }
}
