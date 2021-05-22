<?php

namespace App\Http\Livewire\FollowList;

use Livewire\Component;

class Following extends Component
{
    public function render()
    {
        dd(auth()->user()->following);
        return view('livewire.follow-list.following',['users'=>auth()->user()->following]);
    }
}
