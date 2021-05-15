@extends('layouts.auth')

@section('content')
    <div class="col-md-6 bg-white pt-5">
        <div class="sign-in-from">
            <h1 class="mb-0">Sign in</h1>
            <p>Enter your email address and password to access admin panel.</p>

            @error('loginError')
            <div class="text-danger text-center">
                {{$message}}
            </div>
            @enderror

            <form class="mt-4" method="post" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email"  class="form-control mb-0 @error('email') is-invalid @enderror" id="email" placeholder="Enter email" value="{{old('email')}}">
                    @error('email')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="password" placeholder="Password">
                    @error('password')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                    <a href="#" class="float-left mt-2">Forgot password?</a>
                </div>
                <div class="d-inline-block w-100">
                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1 ">
                        <input type="checkbox" class="form-check-input " style="height: 17px ; width: 17px" id="remember" name="remember">
                        <label class="form-check-label mx-1" for="customCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Sign in</button>
                </div>
                <div class="sign-info">
                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="{{route('register')}}">Sign up</a></span>
                    <ul class="iq-social-media">
                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
@endsection
