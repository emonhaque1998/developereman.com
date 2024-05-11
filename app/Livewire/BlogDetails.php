<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\Attributes\Layout;

class BlogDetails extends Component
{

    public $blog;

    public function mount($slug){
        $this->blog = Blog::where("slug", $slug)->first();
    }

    public function render()
    {
        return view('livewire.blog-details');
    }
}
