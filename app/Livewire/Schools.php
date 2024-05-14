<?php

namespace App\Livewire;

use App\Models\School;
use Livewire\Component;

class Schools extends Component
{
    public function render()
    {
        return view('livewire.schools', [
            "schools" => School::whereVisible(true)->orderBy('sort')->get(),
        ]);
    }
}
