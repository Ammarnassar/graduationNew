<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        if (auth()->attempt($request->validated()))
        {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'loginError' => 'There is a problem with login , try again later !'
        ]);
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::attempt($request->only(['email' , 'password']));

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        session()->regenerateToken();

        return redirect()->route('login');
    }
}
