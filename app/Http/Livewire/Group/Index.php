<?php

namespace App\Http\Livewire\Group;

use App\Models\Group;
use App\Models\Media;

use App\Models\PostGroup;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $group;
    public $groupPhoto;

    public function saveGroupPhoto()
    {
        $name = Hash::make($this->groupPhoto->getClientOriginalName()) . '.' . $this->groupPhoto->extension();

        Media::create([
            'extension' => $this->groupPhoto->extension(),
            'name' => $this->groupPhoto->getClientOriginalName(),
            'path' => $this->groupPhoto->storeAs('media', $name, 'public'),
            'mediaable_id' => $this->group->id,
            'mediaable_type' => 'App\Models\Group',
        ]);

        Group::findOrFail($this->group->id)->update([
            'photo' => $this->groupPhoto->storeAs('media', $name, 'public')
        ]);

        $this->groupPhoto = '';

        $this->alert(
            'success',
            __('Group Photo Updated Successfully !')
        );
    }

    public function render()
    {
        return view('livewire.group.index', [
            'users' => $this->group->users,
            'posts' => $this->group->posts
        ]);
    }
}
