<?php

namespace App\Http\Livewire\Comment;

use App\Models\Comment;
use Livewire\Component;

class IndexComment extends Component
{
    public $post;
    public $comments = [];

    protected $listeners = [
        'commentAdded' => 'comments',
        'commentDeleted' => 'comments',
    ];

    public function render()
    {
        $this->comments = collect($this->post->comments)->take(3);

        return view('livewire.comment.index-comment');
    }

    public function comments()
    {
        $this->comments = collect($this->post->comments)->take(3);
    }

    public function deleteComment($id)
    {
        Comment::findOrFail($id)->delete();

        $this->emit('commentDeleted');

        $this->alert(
            'success',
            'Comment Deleted Successfully !'
        );
    }
}
