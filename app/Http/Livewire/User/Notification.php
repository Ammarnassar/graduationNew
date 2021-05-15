<?php

namespace App\Http\Livewire\User;

use App\Models\Notifications;
use Livewire\Component;

class Notification extends Component
{

    public function render()
    {

        return view('livewire.user.notification',['notifications'=>auth()->user()->notifications]);
    }


}
