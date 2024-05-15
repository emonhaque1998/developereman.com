<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Blog;
use Livewire\Component;
use App\Models\BlogDetail;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Cache;

class Blogs extends Component
{
    public $searchValue = "";
    public $blogs;

    public $blogDetails;
    public $limit = 8;

    public function mount(){
        $this->blogs = Blog::latest()->take($this->limit)->get();

        $this->blogDetails = Cache::remember('dev_blogDetails', Carbon::now()->addDays(30), function () {
            return BlogDetail::latest()->first();
        });
    }

    public function searchBlog(){
        $this->blogs = Blog::where("title", 'like', '%'.$this->searchValue.'%')->take($this->limit)->get();
    }

    public function loadMore(){
        $this->limit += 4;
    }

    #[Title("Blogs")]
    public function render()
    {
        return view('livewire.blogs');
    }
}
