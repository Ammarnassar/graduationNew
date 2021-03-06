<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\Media;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    use WithFileUploads, LivewireAlert;

    public $user;
    public $profilePhoto;

    public function render()
    {
        return view('livewire.user.profile.index', [
            'posts' => Post::where('user_id', $this->user->id)->latest()->get(), 'users' => $this->user->followers,

            'photos' => Post::where('user_id', $this->user->id)->whereHas('media', function ($q) {
                $q->whereIn('extension', ['jpg', 'jpeg', 'png']);
            })->get()
        ]);
    }

    public function saveProfilePhoto()
    {

        $name = Hash::make($this->profilePhoto->getClientOriginalName()) . '.' . $this->profilePhoto->extension();

        $mediaID = Media::insertGetId([
            'extension' => $this->profilePhoto->extension(),
            'name' => $this->profilePhoto->getClientOriginalName(),
            'path' => $this->profilePhoto->storeAs('media', $name, 'public'),
            'mediaable_id' => $this->user->id,
            'mediaable_type' => 'App\Models\User',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $photo = Media::findOrFail($mediaID);

        auth()->user()->update([
            'profile_photo' => $photo->path,
        ]);

        $this->alert(
            'success',
            __('Profile Photo Updated Successfully !')
        );

        $this->profilePhoto = null;

    }
}
