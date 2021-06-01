<?php

namespace App\Http\Livewire\Message;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{

    public function render()
    {
        return view('livewire.message.search' , [
            'users' => User::all()
        ]);
    }
}
