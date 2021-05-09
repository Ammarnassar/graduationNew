<?php

namespace App\Http\Livewire\Post;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class card extends Component
{
    public $post;
    public $likeCount;
    public $like = false;
    public $likesList = [];

    protected $listeners = [
        'likeAdded' => 'likeCount' ,
        'likeDeleted' => 'likeCount'
    ];

    public function render()
    {
        if (auth()->user()->likes->where('post_id' , $this->post->id)->count())
            $this->like = true;

        $this->likeCount = $this->post->likes_count;

        $this->likesList = User::whereHas('likes' , function ($q) {
            $q->where('post_id' , $this->post->id);
        })->get();

        return view('livewire.post.card');
    }

    public function newLike()
    {
         Like::insertGetId([
           'post_id' => $this->post->id,
           'user_id' => auth()->id()
        ]);

        $this->like = true;

        $this->emit('likeAdded');

    }

    public function deleteLike()
    {
        Like::where('post_id' , $this->post->id)->where('user_id' , auth()->id())->delete();

        $this->like = false;

        $this->emit('likeDeleted');

    }

    public function likeCount()
    {
        $this->likeCount = $this->post->likes->count();
    }

    public function deletePost()
    {
        Post::findOrFail($this->post->id)->delete();

        $this->emit('postDeleted');

        $this->alert(
            'success' ,
            'Post Deleted Successfully !'
        );
    }
}
