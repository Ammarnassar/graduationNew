<?php

namespace App\Http\Livewire\Search;

use App\Models\Group;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    protected $queryString = ['search'];

    public function render()
    {
//        dd();
        return view('livewire.search.index' , [
            'posts' => Post::where('body', 'like', '%'.$this->search.'%')->simplePaginate(10),
            'users' => User::where('first_name', 'like', '%'.$this->search.'%')
                ->orWhere('last_name', 'like', '%'.$this->search.'%')
                ->orWhere('university', 'like', '%'.$this->search.'%')->simplePaginate(10),
            'groups' => Group::where('group_name', 'like', '%'.$this->search.'%')
                ->orWhere('description', 'like', '%'.$this->search.'%')->simplePaginate(10),
        ]);
    }
}
