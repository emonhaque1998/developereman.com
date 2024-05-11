<?php

namespace App\Livewire;

use App\Models\BlogCategory;
use Livewire\Component;
use Livewire\Attributes\Layout;

class CategoryBlogs extends Component
{

    public $slug;
    public $blogs;
    public $searchValue;

    public function mount($slug){
        $this->slug = $slug;
        $category = BlogCategory::with(['blog' => function ($query) {
            $query->take(8);
        }])->where("slug", $slug)->first();
        $this->blogs = $category->blog;
    }

    public function searchBlog(){
        $category = BlogCategory::with(['blog' => function ($query) {
            $query->where("title", 'like', '%'.$this->searchValue.'%')->take(8);
        }])->where("slug", $this->slug)->first();
        $this->blogs = $category->blog;
    }

    #[Layout('layouts.home')]
    public function render()
    {
        return view('livewire.category-blogs');
    }
}
