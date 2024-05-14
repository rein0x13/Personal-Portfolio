<?php

namespace App\Livewire;

use App\Models\Work;
use Livewire\Component;

class Works extends Component
{
    public function render()
    {
        return view('livewire.works', [
            "works" => Work::whereVisible(true)->orderBy('sort')->get(),
        ]);
    }
}
