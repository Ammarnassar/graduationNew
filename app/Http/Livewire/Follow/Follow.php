<?php

namespace App\Http\Livewire\Follow;

use App\Models\Follow as ModelsFollow;
use Livewire\Component;

class Follow extends Component
{
    public $user;

    public function follow($user_id){
        ModelsFollow::create([
            'following'=>auth()->id(),
            'follower'=>$user_id,
        ]);

        (new \App\Http\Controllers\NotificationsController)->notify($this->user->id,'like','Liked your post');

    }

    public function unfollow($user_id){

        ModelsFollow::where('following',auth()->id())->where('follower',$user_id)->delete();
    }

    public function render()
    {
        return view('livewire.follow.follow',['user_follow'=>ModelsFollow::where('following',auth()->user()->id)->where('follower',$this->user->id)->get()->count()]);
    }
}
