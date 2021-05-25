<?php

namespace App\Http\Livewire\Group;

use Livewire\Component;

class Membercard extends Component
{
    public $group;

    public function render()
    {
        return view('livewire.group.membercard',['users'=>$this->group->users->take(9)]);
    }
}
