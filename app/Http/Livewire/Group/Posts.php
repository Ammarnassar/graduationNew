<?php

namespace App\Http\Livewire\Group;

use Livewire\Component;

class Posts extends Component
{
    public $posts;
    public function render()
    {
        return view('livewire.group.posts');
    }
}
