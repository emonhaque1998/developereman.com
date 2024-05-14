<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BlogCategory;
use Livewire\Attributes\Title;

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

    #[Title("Category Wise Blogs | Developer Eman")]
    public function render()
    {
        return view('livewire.category-blogs');
    }
}
