<?php

namespace App\Http\Livewire\Trend;

use App\Models\Post;
use App\Models\Trend;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Card extends Component
{
    public $trends = [];
    public $ids = [];

    protected $listeners = [
        'postAdded' => 'render',
        'postDeleted' => 'render'
    ];

    public function render()
    {
        $trends = DB::table('post_trend')->select('trend_id')
            ->groupBy('trend_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(5)
            ->get()->toArray();

        foreach ($trends as $trend)
        {
            array_push($this->ids , $trend->trend_id);
        }

        $this->trends = Trend::findOrFail($this->ids);

        return view('livewire.trend.card');
    }

}
