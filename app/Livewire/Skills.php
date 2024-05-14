<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{
    public function render()
    {
        return view('livewire.skills', [
            "skills" => Skill::whereVisible(true)->orderBy('sort')->get(),
        ]);
    }
}
