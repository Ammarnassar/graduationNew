<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(User $user)
    {
        return view('user.profile' , [
            'user' => $user,
            'posts' => Post::with(['likes' , 'user'])->where('user_id' , $user->id)->get()
        ]);
    }
}
