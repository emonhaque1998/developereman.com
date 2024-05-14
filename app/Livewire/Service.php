<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ServicePage;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Cache;

class Service extends Component
{
    public $service;
    public function mount(){
        $this->service = Cache::remember('dev_service_page', Carbon::now()->addDays(30), function () {
            return ServicePage::latest()->first();
        });
    }

    #[Title("Services | Developer Eman")]
    public function render()
    {
        return view('livewire.service');
    }
}
