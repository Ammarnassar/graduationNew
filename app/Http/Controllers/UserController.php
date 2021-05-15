<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($id)
    {
        return view('user.profile.index' , [
            'user' => User::with(['posts' , 'posts.likes'])->findOrFail($id),
        ]);
    }

    public function photos()
    {
        return view('user.photos' , [
            'posts' => auth()->user()->posts()->whereHas('media', function($q){
                $q->whereIn('extension', ['jpg' , 'jpeg' , 'png']);
            })->get()
        ]);
    }

    public function videos()
    {
        return view('user.videos' , [
            'posts' => auth()->user()->posts()->whereHas('media', function($q){
                $q->whereIn('extension', ['mp4' , 'ogg' , 'mpeg' , 'mov' , 'flv' , 'mkv' , 'avi']);
            })->get()
        ]);
    }
}
