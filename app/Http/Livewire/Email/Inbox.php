<?php

namespace App\Http\Livewire\Email;

use App\Http\Controllers\NotificationsController;
use App\Models\File;
use App\Models\Mail;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Inbox extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $sender;
    public $receiver;
    public $subject;
    public $body;
    public $files=[];
    public $bookmarks_count;
    public $search;
    public $selectPage=false;
    public $checked=[];

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->bookmarks_count=Mail::where('receiver',auth()->id())->where('important',1)->get()->count();
    }

    public function delete($id)
    {
        Mail::findOrFail($id)->delete();
        return redirect()->route('email.inbox') ;
    }

    public function forceDelete($id)
    {
        Mail::where('id',$id)->forceDelete();
        return redirect()->route('email.inbox') ;
    }

      public function download($id)
    {
        $file=File::where('id',$id)->first();

        $filePath = public_path("storage/files/".$file->path);

        $headers = ['Content-Type: application/pdf'];

        $fileName = time().'.pdf';

        return response()->download($filePath, $fileName, $headers);
    }

    public function important($id)
    {
        $mail=Mail::where('id',$id)->first();
        $mail->update([
            'important'=>1,
        ]);
    }

    public function render()
    {
        return view('livewire.email.inbox',[
            'mails'=>Mail::with('files')->whereHas('user' , function($query) {
            $query->where('name' , 'like', '%'.$this->search.'%');
        })->where('receiver',auth()->id())->latest()->simplePaginate(10),

        'trashs'=>Mail::with('files')->where('receiver',auth()->id())->latest()->onlyTrashed()->get(),
        'sent_mails'=>Mail::with('files')->where('sender',auth()->id())->latest()->get(),
        'bookmarks'=>Mail::with('files')->where('receiver',auth()->id())->where('important',1)->latest()->get(),
        ]);
    }

}
