<?php

namespace App\Http\Livewire\Post;

use App\Models\Like;
use App\Models\Post;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SimpleCard extends Component
{
    use LivewireAlert;

    public $post;
    public $likeCount = 0;
    public $like = false;
    public $likesList = [];
    public $commentsCount = 0;

    protected $listeners = [
        'likeAdded' => 'likeCount',
        'likeDeleted' => 'likeCount',
    ];

    public function render()
    {
        if (auth()->user()->likes->where('post_id', $this->post->id)->count())
            $this->like = true;

        $this->likeCount = $this->post->likes_count;

        $this->commentsCount = $this->post->comments->count();

        return view('livewire.post.simple-card');
    }

    public function newLike()
    {
        Like::insertGetId([
            'post_id' => $this->post->id,
            'user_id' => auth()->id()
        ]);

        $this->like = true;

        if ($this->post->user->id !== auth()->id()) {
            (new \App\Http\Controllers\NotificationsController)->notify($this->post->user->id, 'mail', 'Liked your post');
        }

        $this->emit('likeAdded');
    }

    public function deleteLike()
    {
        Like::where('post_id', $this->post->id)->where('user_id', auth()->id())->delete();

        $this->like = false;

        $this->emit('likeDeleted');

    }

    public function likeCount()
    {
        $this->likeCount = $this->post->likes->count();
    }

    public function deletePost()
    {

        Post::find($this->post->id)->delete();

        $this->emit('postDeleted');

        $this->alert(
            'success',
            __('Post Deleted Successfully !')
        );
    }

    public function showPost()
    {
        return redirect()->route('post.show', $this->post->id);
    }
}
