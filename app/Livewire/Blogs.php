<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.blogs', [
            'blogs' => Blog::with('user')
                ->whereVisible(true)
                ->where('title', 'like', "%{$this->search}%")
                ->orWhere('body', 'like', "%{$this->search}%")
                ->latest()
                ->paginate(10),
        ]);
    }
}
