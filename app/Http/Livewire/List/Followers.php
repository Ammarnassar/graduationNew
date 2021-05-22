<?php

namespace App\Http\Livewire\List;

use Livewire\Component;

class Followers extends Component
{
    public function render()
    {
        return view('livewire.list.followers',['users'=>auth()->user()->followers]);
    }
}
