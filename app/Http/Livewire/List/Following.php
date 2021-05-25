<?php

namespace App\Http\Livewire\List;

use Livewire\Component;

class Following extends Component
{
    public function render()
    {
        return view('livewire.list.following',['users'=>auth()->user()->following]);
    }
}
