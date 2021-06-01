<?php

namespace App\Http\Livewire\Message;

use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;

class Send extends Component
{
    public $messageBody;
    public $chats;
    public $user;

    protected $listeners = [
        'messageSent' => 'messages'
    ];
    public function render()
    {
        if (Str::contains(strtolower(auth()->user()->name), 'ammar'))
        {
            $this->user = User::findOrFail(2);
        }

        else
            $this->user = User::findOrFail(1);


        $this->chats = Chat::with('messages')->where('receiver_id' , 2)->get();

        $messages = Message::with('user')
            ->latest()
            ->take(10)
            ->get()
            ->sortBy('id');

        return view('livewire.message.send' , [
            'messages' => $messages
        ]);
    }

    public function messages()
    {
        $this->chat = Chat::with('messages')->where('receiver_id' , 2)->get();
    }
    public function sendMessage()
    {
        $chat_id = Chat::insertGetId([
            'sender_id' => auth()->id(),
            'receiver_id' => 2
        ]);

        Message::create([
            'user_id' => auth()->id(),
            'body' => $this->messageBody,
            'chat_id' => $chat_id
        ]);

        $this->emit('messageSent');

        $this->reset('messageBody');
    }
}
