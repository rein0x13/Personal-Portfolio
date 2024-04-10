<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Experience;

class Experiences extends Component
{
    public function render()
    {
        return view('livewire.experiences', [
            'experiences' => Experience::whereVisible(true)->orderBy('sort')->get(),
        ]);
    }
}
