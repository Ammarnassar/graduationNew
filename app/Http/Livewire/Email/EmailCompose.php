<?php

namespace App\Http\Livewire\Email;

use App\Models\File;
use App\Models\Mail;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\Console\Input\Input;
use App\Http\Livewire\User\Notification;
class EmailCompose extends Component
{
    use WithFileUploads;


    public $sender,$receiver,$subject,$body,$mails,$files=[];

    protected $rules=[
        'body'=>'required|min:1',
        'receiver'=>'required|email|exists:users,email',
        'files.*' => ['nullable','mimes:png,jpg,pdf,docx,doc,zip,txt','max:102400'],
    ];

    public function deleteFiles($index)
    {
        array_splice($this->files, $index, 1);

    }
    public function send(){

        $this->validate();
        $receiver=User::where('email',$this->receiver)->first();

        $mailId=Mail::insertGetId([
            'sender'=>auth()->id(),
            'receiver'=>$receiver->id,
            'subject'=>$this->subject,
            'body'=>$this->body,
            'created_at'=>now(),
        ]);


        foreach ($this->files as $file) {
            $file->store('files', 'public');


            File::create([
                'path'=>$file->hashName(),
                'file_name'=>$file->getClientOriginalName(),
                'extension'=>$file->extension(),
                'fileable_id'=>$mailId,
                'fileable_type'=>'App\Models\Mail',
            ]);
        }

        (new \App\Http\Controllers\NotificationsController)->notify($receiver->id,'mail','sent you email');

        return redirect()->route('email.inbox');
    }

    public function render()
    {
        return view('livewire.email.email-compose');
    }
}
