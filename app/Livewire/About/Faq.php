<?php

namespace App\Livewire\About;

use App\Models\Faq as ModelsFaq;
use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        return view('livewire.about.faq')->with([
            "faqs" => ModelsFaq::all()
        ]);
    }
}
