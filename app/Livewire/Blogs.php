<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Blogs extends Component
{
    public $searchValue = "";
    public $blogs;

    public function searchBlog(){
        $this->blogs = Blog::where("title", 'like', '%'.$this->searchValue.'%')->get();
    }


    public function mount()
    {
        $this->blogs = Blog::latest()->take(8)->get();
    }

    #[Layout('layouts.home')]
    public function render()
    {
        return view('livewire.blogs');
    }
}
