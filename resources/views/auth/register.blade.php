@extends('layouts.auth')

@section('content')

    <div class="col-md-6 bg-white h-100 py-5 mx-auto w-100">
        <div class="sign-in-from">
            <div class="d-flex align-items-center justify-content-center my-5 mt-md-0 mb-md-4">
                <img src="{{asset('temp/images/logo.png')}}" loading="lazy" width="50" height="50" class="img-fluid " alt="">
            </div>
            <h1 class="mb-0 text-center">{{__('Register')}}</h1>
            <p class="text-center mt-3">{{__('Enter your Information to register .')}}</p>


            <form class="mt-4" method="post" action="{{route('register')}}">
                @csrf

                {{-- Name --}}
                <div class="form-group">
                    <input type="text" class="form-control mb-0 @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" placeholder="{{__('Name')}}" value="{{old('name')}}">
                    @error('name')
                    <div class="mt-1 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="form-group">
                    <input type="text" class="form-control mb-0 @error('email') is-invalid @enderror" id="exampleInputEmail2" name="email" placeholder="{{__('Email')}}" value="{{old('email')}}">
                    @error('email')
                    <div class="mt-1 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{-- University --}}
{{--                <div class="form-group">--}}
{{--                    <select type="text" class="form-control mb-0 @error('email') is-invalid @enderror" id="exampleInputEmail2" name="email" >--}}
{{--                    <option selected> Select Option </option>--}}
{{--                    <option> University Of Jordan </option>--}}
{{--                    <option> University Of Karak </option>--}}
{{--                    </select>--}}

{{--                    @error('email')--}}
{{--                    <div class="mt-1 text-danger">--}}
{{--                        {{$message}}--}}
{{--                    </div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

                {{-- Password --}}
                <div class="form-group">
                    <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" placeholder="{{__('Password')}}">
                    @error('password')
                    <div class="mt-1 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="form-group">
                    <input type="password" class="form-control mb-0 @error('password_confirmation') is-invalid @enderror" id="exampleInputPassword2" name="password_confirmation" placeholder="{{__('Confirm Password')}}">
                    @error('password_confirmation')
                    <div class="mt-1 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{-- Name --}}
                <div class="d-inline-block w-100">
                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">{{__('I accept')}} <a href="#">{{__('Terms and Conditions')}}</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">{{__('Register')}}</button>
                </div>

                <div class="sign-info">
                    <span class="dark-color d-inline-block line-height-2">{{__('Already Have Account ?')}} <a href="{{route('login')}}">{{__('Login')}}</a></span>
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
