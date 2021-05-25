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
//        DB::table('trends')->where(function ($query) use ($activated) {
//            $query->where('activated', '=', $activated);
//        })->get();
//
//        $tr = DB::table('trends')->whereIn('id' , function($innerQuery) {
//            $innerQuery->select('trend_id')
//                ->from('post_trend')->groupBy('trend_id')->limit(5)->orderBy(DB::raw('count(*)'), 'DESC');
//        })->get();
//
//        dd($new);
//        $new = Trend::with('posts')->get();
//
//        dd($new);
//

        $trends = DB::table('post_trend')->select('trend_id')
            ->groupBy('trend_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(5)
            ->get()->toArray();

        foreach ($trends as $trend)
        {
            array_push($this->ids , $trend->trend_id);
        }


        return view('livewire.trend.card');
    }

}
