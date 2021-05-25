<?php

namespace App\Http\Livewire\Group;

use App\Models\Group;
use Livewire\Component;

class Form extends Component
{
    public $group_name;
    public $university_name;
    public $colleague;
    public $country;
    public $description;

    protected $rules = [
        'group_name' => 'required|string|min:3|max:64',
        'university_name' => 'required|string|min:3|max:64',
        'colleague' => 'required|string|min:3|max:64',
        'country' => 'required',
        'description' => 'string|min:3|max:255',
    ];

    public function store()
    {
        $this->validate();
        Group::create([
            'group_name' => $this->group_name,
            'university_name' => $this->university_name,
            'colleague' => $this->colleague,
            'country' => $this->country,
            'description' => $this->description,
            "admin" => auth()->id(),
        ]);

        return redirect()->route('group.form');
    }

    public function render()
    {
        return view('livewire.group.form');
    }
}
