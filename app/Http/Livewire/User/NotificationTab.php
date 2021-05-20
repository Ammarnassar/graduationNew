<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class NotificationTab extends Component
{
    public function render()
    {
        return view('livewire.user.notification-tab',['notifications'=>auth()->user()->notifications]);
    }
}
