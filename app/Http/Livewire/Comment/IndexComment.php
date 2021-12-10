<?php

namespace App\Http\Livewire\Comment;

use App\Models\Comment;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class IndexComment extends Component
{
    use LivewireAlert;

    public $post;
    public $comments = [];

    protected $listeners = [
        'commentAdded' => 'render',
        'commentDeleted' => 'render',
    ];

    public function render()
    {
        $this->comments = collect($this->post->comments)->take(3);

        return view('livewire.comment.index-comment');
    }

    public function deleteComment($id)
    {
        Comment::findOrFail($id)->delete();

        $this->emit('commentDeleted');

        $this->alert(
            'success',
            __('Comment Deleted Successfully !')
        );
    }
}
