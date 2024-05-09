<?php

namespace App\Livewire\Home;

use App\Models\Review;
use App\Models\Testimonial as ModelsTestimonial;
use Livewire\Component;

class Testimonial extends Component
{
    public function render()
    {
        return view('livewire.home.testimonial')->with([
            "testimonial" => ModelsTestimonial::latest()->first(),
            "reviews" => Review::all()
        ]);
    }
}
