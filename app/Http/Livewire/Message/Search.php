<?php

namespace App\Http\Livewire\Message;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.message.search' , [
            'users' => User::where('first_name' , 'like', '%'.$this->search.'%')
            ->orWhere('last_name' , 'like', '%'.$this->search.'%')->get()
        ]);
    }
}
