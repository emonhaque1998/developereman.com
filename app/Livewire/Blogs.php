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

    public function mount(){
        $this->blogs = Blog::latest()->take(8)->get();

        $this->blogDetails = Cache::remember('dev_blogDetails', Carbon::now()->addDays(30), function () {
            return BlogDetail::latest()->first();
        });
    }

    public function searchBlog(){
        $this->blogs = Blog::where("title", 'like', '%'.$this->searchValue.'%')->take(8)->get();
    }

    #[Title("Blogs | Developer Eman")]
    public function render()
    {
        return view('livewire.blogs')->with([
            "blogDetails" => BlogDetail::latest()->first()
        ]);
    }
}
