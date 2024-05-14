<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\BlogDetail;
use Livewire\Component;

class Blogs extends Component
{
    public $searchValue = "";
    public $blogs;

    public function searchBlog(){
        $this->blogs = Blog::where("title", 'like', '%'.$this->searchValue.'%')->take(8)->get();
    }


    public function mount()
    {
        $this->blogs = Blog::latest()->take(8)->get();
    }

    public function render()
    {
        return view('livewire.blogs')->with([
            "blogDetails" => BlogDetail::latest()->first()
        ]);
    }
}
