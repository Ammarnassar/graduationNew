<?php

namespace App\Http\Livewire\Group;

use App\Models\Media;
use App\Models\Post_group;
use App\Models\PostGroup as ModelsPostGroup;
use App\Models\Trend;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Newpost extends Component
{
    use WithFileUploads , LivewireAlert;

    public $body;
    public $postLength;
    public $tags;
    public $media;
    public $group;

    protected $rules = [
        'body' => 'nullable|max:255',
        'media' => 'nullable|file',
    ];

    function getTagsFromPostGroup($string)
    {
        $regex = '/(?:^|\s)(#[^\s#]+|[^\s#]+#)(?=$|\s)*/';

        preg_match_all($regex, $string, $matches);

        return $matches[0];
    }


    public function save()
    {
        $this->validate();

        $body = str_replace($this->tags, '', $this->body);

        $post_id = ModelsPostGroup::insertGetId([
            'body' => nl2br($body),
            'user_id' => auth()->id(),
            'group_id' => $this->group->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($this->media) {
            $name = Hash::make($this->media->getClientOriginalName()) . '.' . $this->media->extension();

            Media::create([
                'extension' => $this->media->extension(),
                'name' => $this->media->getClientOriginalName(),
                'path' => $this->media->storeAs('media', $name, 'public'),
                'mediaable_id' => $post_id,
                'mediaable_type' => 'App\Models\PostGroup',
            ]);


        }

        if ($this->tags) {
            foreach ($this->tags as $tag) {
                $trend = Trend::firstOrCreate([
                    'name' => $tag,
                ]);
                $trend->posts()->attach($post_id);

            }
        }

        $this->body = '';

        $this->media = '';

        $this->emit('postAdded');

        $this->alert(
            'success',
            __('Post Created Successfully !')
        );
    }

    public function deleteMedia()
    {
        $this->media = '';
    }

    public function render()
    {
        $this->postLength = Str::length(str_replace(' ', '', $this->body));

        $this->tags = $this->getTagsFromPostGroup($this->body);

        return view('livewire.group.newpost');
    }
}
