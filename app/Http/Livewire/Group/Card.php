<?php

namespace App\Http\Livewire\Group;

use Livewire\Component;

class Card extends Component
{
    public function render()
    {
        return view('livewire.group.card', ['groups' => auth()->user()->groups]);
    }
}
