<?php

namespace App\Livewire\Home;

use App\Models\Skill as ModelsSkill;
use App\Models\SkillItem;
use Livewire\Component;

class Skill extends Component
{
    public function render()
    {
        return view('livewire.home.skill')->with([
            "skill" => ModelsSkill::latest()->first(),
            "skillItems" => SkillItem::all()
        ]);
    }
}
