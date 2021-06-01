<?php

namespace App\Http\Livewire\Message;

use App\Models\Message;
use Livewire\Component;

class Send extends Component
{
    public $messageBody;
    public $chat;

    public function render()
    {
        $messages = Message::with('user')
            ->latest()
            ->take(10)
            ->get()
            ->sortBy('id');

        return view('livewire.message.send' , [
            'messages' => $messages
        ]);
    }

    public function sendMessage()
    {
        Message::create([
            'user_id' => auth()->id(),
            'body' => $this->messageBody
        ]);

        $this->reset('messageBody');
    }
}
