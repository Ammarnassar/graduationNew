<?php

namespace App\Http\Livewire\Group;

use App\Models\Join as ModelsJoin;
use Livewire\Component;

class Join extends Component
{
    public $group;
   
    public function join()
    {
        
        ModelsJoin::create([
            'user_id' => auth()->id(),
            'group_id' => $this->group->id,
        ]);
    }

    public function unjoin()
    {
        ModelsJoin::where('user_id', auth()->id())->where('group_id', $this->group->id)->delete();
    }

    public function render()
    {
        return view('livewire.group.join',['user_join'=>ModelsJoin::where('user_id',auth()->id())->where('user_id',auth()->id())->get()->count()]);
    }
}
