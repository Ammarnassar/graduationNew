<?php

namespace App\Http\Livewire\Trend;

use App\Models\Post;
use App\Models\Trend;
use Livewire\Component;

class Card extends Component
{
    public $trends;

    protected $listeners = [
        'postAdded' => 'trendCount',
        'postDeleted' => 'trendCount'
    ];
    public function render()
    {
        $this->trends = Trend::select('name')
            ->groupBy('name')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(5)
            ->get();

//        foreach ($this->trends as $trend)
//        {
//            dd($trend->post->count());
//
//        }
        return view('livewire.trend.card');
    }

    public function trendCount()
    {
        $this->trends = Trend::select('name')
            ->groupBy('name')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(5)
            ->get();
    }
}
