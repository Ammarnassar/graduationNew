<?php

namespace App\Http\Livewire\Comment;

use App\Models\Comment;
use Livewire\Component;

class NewComment extends Component
{
    public $body;
    public $post;

    public function render()
    {
        return view('livewire.comment.new-comment');
    }

    public function save()
    {
        Comment::create([
            'body' => $this->body,
            'post_id' => $this->post->id,
            'user_id' => auth()->id(),
        ]);

        $this->body = '' ;

        $this->emit('commentAdded');

        $this->alert(
            'success',
            __('Comment Created Successfully !')
        );

    }
}
