<?php

namespace App\Http\Livewire\Post;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AdvCard extends Component
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
        'commentAdded' => 'commentCount',
        'commentDeleted' => 'commentCount',
    ];

    public function render()
    {
        if (auth()->user()->likes->where('post_id', $this->post->id)->count())
            $this->like = true;

        $this->likeCount = $this->post->likes_count;

        $this->commentsCount = $this->post->comments->count();

        $this->likesList = collect(User::whereHas('likes', function ($q) {
            $q->where('post_id', $this->post->id);
        })->get())->take(5);

        return view('livewire.post.adv-card');
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
        Like::where('post_id', $this->post->id)->where('user_id', auth()->id())->delete();

        $this->like = false;

        $this->emit('likeDeleted');

    }

    public function likeCount()
    {
        $this->likeCount = $this->post->likes->count();
    }

    public function commentCount()
    {
        $this->commentsCount = $this->post->comments->count();
    }

    public function deletePost()
    {
        Post::findOrFail($this->post->id)->delete();

        $this->emit('postDeleted');

        $this->alert(
            'success',
            'Post Deleted Successfully !'
        );
    }
}
