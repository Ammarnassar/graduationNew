<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home' , [
           'posts' => Post::with(['likes' , 'user'])->latest()->get()
        ]);
    }
}
