<?php

namespace App\Http\Livewire\Group;

use App\Models\Group;
use App\Models\Join as ModelsJoin;
use Livewire\Component;

class Form extends Component
{
    public $group_name;
    public $university_name;
    public $colleague;
    public $city;
    public $description;

    protected $rules = [
        'group_name' => 'required|string|min:3|max:64',
        'university_name' => 'required|string|min:3|max:64',
        'colleague' => 'required',
        'city' => 'required',
        'description' => 'nullable|min:3|max:255',
    ];

    public function store()
    {
          $id = Group::insertGetId([
            'group_name' => $this->group_name,
            'university_name' => $this->university_name,
            'colleague' => $this->colleague,
            'country' => $this->city,
            'description' => $this->description,
            "admin" => auth()->id(),
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        ModelsJoin::create([
            'user_id' => auth()->id(),
            'group_id' => $id,
        ]);

        return redirect()->route('group.show' , $id);
    }

    public function render()
    {
        return view('livewire.group.form' , [
            'universities' => array_keys(config('universities.data')),
            'cities' => config('cities.data'),
            'colleges' => config('universities.data.'.$this->university_name.'.colleges'),
        ]);
    }
}
