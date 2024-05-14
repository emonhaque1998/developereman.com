<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\AboutPage;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Cache;

class About extends Component
{
    public $about;
    public function mount(){
        $this->about = Cache::remember('dev_about_page', Carbon::now()->addDays(30), function () {
            return AboutPage::latest()->first();
        });
    }

    #[Title('About | Developer Eman')]
    public function render()
    {
        return view('livewire.about');
    }
}
