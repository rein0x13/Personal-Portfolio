<?php

namespace App\Livewire;

use App\Models\Seminar;
use Livewire\Component;

class Seminars extends Component
{
    public function render()
    {
        return view('livewire.seminars', [
            'seminars'      => Seminar::whereVisible(true)->orderBy('sort')->get(),
        ]);
    }
}
