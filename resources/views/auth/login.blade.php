@extends('layouts.auth')

@section('content')
    <div class="col-md-6 bg-white pt-5 mx-auto pb-5">
        <div class="sign-in-from ">
            <div class="d-flex align-items-center justify-content-center mb-4">
                <img src="{{asset('temp/images/logo.png')}}" loading="lazy" width="50" height="50" class="img-fluid " alt="">
            </div>
            <h1 class="mb-0 text-center">{{__('Login')}}</h1>
            <p class="text-center mt-3">{{__('Enter your email address and password to login .')}}</p>

            @error('loginError')
            <div class="text-danger text-center">
                {{$message}}
            </div>
            @enderror

            <form class="mt-4" method="post" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email"  class="form-control mb-0 @error('email') is-invalid @enderror" id="email" placeholder="{{__('Email')}}" value="{{old('email')}}">
                    @error('email')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="password" placeholder="{{__('Password')}}">
                    @error('password')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                    <a href="#" class="float-left mt-2">{{__('Forgot password?')}}</a>
                </div>
                <div class="d-inline-block w-100">
                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                        <label class="custom-control-label " for="customCheck1">{{__('Remember Me')}}</label>
                    </div>

                    <button type="submit" class="btn btn-primary col-12 col-md-5 w-100 float-md-right">{{__('Login')}}</button>
                </div>
                <div class="sign-info">
                    <span class="dark-color d-inline-block line-height-2">{{__('Don\'t have an account?')}} <a href="{{route('register')}}">{{__('Register')}}</a></span>
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-0 mt-md-4">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <a rel="alternate" class="mx-2" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>

            @endforeach
        </div>
    </div>
@endsection
