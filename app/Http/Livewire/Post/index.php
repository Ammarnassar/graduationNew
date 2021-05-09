<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class index extends Component
{
    public $posts;

    public $listeners = [
        'postAdded' => 'postsCount',
        'postDeleted' => 'postsCount',
    ];

    public function render()
    {
        $this->posts = Post::with(['likes' , 'user'])->latest()->get();

        return view('livewire.post.index');
    }

    public function postsCount()
    {
        $this->posts = Post::with(['likes' , 'user'])->latest()->get();
    }


}
