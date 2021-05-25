<?php

namespace App\Http\Livewire\Notifications;

use App\Models\Notifications;
use Livewire\Component;

class Notify extends Component
{
    public function render()
    {
        return view('livewire.notifications.notify',['notifications'=>(auth()->user()->notifications->take(3))]);
    }
}
