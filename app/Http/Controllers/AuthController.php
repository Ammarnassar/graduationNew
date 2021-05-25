<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        if (auth()->attempt($request->validated() , $request->remember))
        {
            return redirect()->route('home');
        }

        return back()->withInput()->withErrors([
            'loginError' => __('There is a problem with login , please check the entered data !')
        ]);
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'username' => $request->username,
            'university' => $request->university,
            'city' => $request->city,
            'password' => bcrypt($request->password),
        ]);

        Auth::attempt($request->only(['email' , 'password']));

        Follow::create([
            'following'=> auth()->id(),
            'follower'=> auth()->id(),
        ]);

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        session()->regenerateToken();

        return redirect()->route('login');
    }
}
