<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Cache;
use App\Models\Contact as ModelsContact;

class Contact extends Component
{
    public $contact;
    public function mount(){
        $this->contact = Cache::remember('dev_contact', Carbon::now()->addDays(30), function () {
            return ModelsContact::latest()->first();
        });
    }

    #[Title("Contact | Developer Eman")]
    public function render()
    {
        return view('livewire.contact');
    }
}
