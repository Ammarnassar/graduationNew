<?php

namespace App\Http\Livewire\Post;

use App\Models\Media;
use App\Models\Post;
use App\Models\Trend;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Illuminate\Support\HtmlString;
use Livewire\WithFileUploads;

class NewPost extends Component
{
    use WithFileUploads;

    public $body;
    public $postLength;
    public $tags;
    public $media;

    protected $rules = [
        'body' => 'nullable|max:255',
        'media' => 'nullable|file',
    ];

    function getTagsFromPost($string)
    {
        $regex = '/(?:^|\s)(#[^\s#]+|[^\s#]+#)(?=$|\s)*/';

        preg_match_all($regex, $string, $matches);

        return $matches[0];
    }

    public function render()
    {
        $this->postLength = Str::length(str_replace(' ' , '' ,$this->body));

        $this->tags = $this->getTagsFromPost($this->body);

        return view('livewire.post.new-post');
    }

    public function save()
    {
        $this->validate();

        $body = str_replace($this->tags, '' ,$this->body);

        $post_id = Post::insertGetId([
            'body' => nl2br($body),
            'user_id' => auth()->id(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($this->media)
        {
            $name = Hash::make($this->media->getClientOriginalName()).'.'.$this->media->extension();

            Media::create([
                'extension' => $this->media->extension(),
                'name' => $this->media->getClientOriginalName(),
                'path' => $this->media->storeAs('media' , $name , 'public'),
                'mediaable_id'=>$post_id,
                'mediaable_type'=>'App\Models\Post',
            ]);


        }

        if ($this->tags) {
            foreach ($this->tags as $tag)
            {
                $trend = Trend::firstOrCreate([
                    'name' =>  $tag,
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
}
