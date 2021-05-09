@extends('layouts.auth')

@section('content')

    <div class="col-md-6 bg-white pt-5">
        <div class="sign-in-from">
            <h1 class="mb-0">Sign Up</h1>
            <p>Enter your email address and password to access admin panel.</p>
            <form class="mt-4" method="post" action="{{route('register')}}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control mb-0 @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" placeholder="Your Name" value="{{old('name')}}">
                    @error('name')
                    <div class="mt-1 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-0 @error('email') is-invalid @enderror" id="exampleInputEmail2" name="email" placeholder="Enter email" value="{{old('email')}}">
                    @error('email')
                    <div class="mt-1 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" placeholder="Password">
                    @error('password')
                    <div class="mt-1 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control mb-0 @error('password_confirmation') is-invalid @enderror" id="exampleInputPassword2" name="password_confirmation" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <div class="mt-1 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="d-inline-block w-100">
                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Sign Up</button>
                </div>
                <div class="sign-info">
                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="{{route('login')}}">Log In</a></span>
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
