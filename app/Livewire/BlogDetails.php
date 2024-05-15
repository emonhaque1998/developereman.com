<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Cache;

class BlogDetails extends Component
{

    public $blog;
    public $name = "";
    public $email = "";
    public $text = "";
    public $slug;
    public $blogId;
    public $facebookShare;
    public $twiterShare;
    public $contact;

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
        $this->contact = Cache::remember('dev_contact', Carbon::now()->addDays(30), function () {
            return Contact::latest()->first();
        });

        $this->facebookShare = "https://www.facebook.com/sharer/sharer.php?u=" . request()->url();
        $this->twiterShare = "https://twitter.com/intent/tweet?url=" . request()->url();
    }

    #[Title("Blog Details | Developer Eman")]
    public function render()
    {
        return view('livewire.blog-details');
    }
}
