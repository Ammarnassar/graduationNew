<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Trend;
use Illuminate\Http\Request;

class TrendController extends Controller
{

    public function index()
    {
        return view('trend.index' , [
            'trends' => Trend::latest(),
        ]);
    }

    public function show($id)
    {
        $trend = Trend::findOrFail($id);
        $posts = $trend->posts;

        return view('trend.show' , [
            'trend' => $trend,
            'posts' => $posts
        ]);
    }

}
