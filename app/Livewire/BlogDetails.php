<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Comment;
use Livewire\Component;

class BlogDetails extends Component
{

    public $blog;
    public $name = "";
    public $email = "";
    public $text = "";
    public $slug;
    public $blogId;

    public function save(){
        Comment::create([
            "name" => $this->name,
            "email" => $this->email,
            "text" => $this->text,
            "blog_id" => $this->blog->id,
        ]);
    }

    public function mount($slug){
        $this->blog = Blog::where("slug", $slug)->first();
    }

    public function render()
    {
        return view('livewire.blog-details');
    }
}
