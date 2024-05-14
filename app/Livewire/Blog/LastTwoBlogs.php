<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class LastTwoBlogs extends Component
{
    public function render()
    {
        return view('livewire.blog.last-two-blogs')->with([
            "blogs" => Blog::latest()->take(2)->get()
        ]);
    }
}
