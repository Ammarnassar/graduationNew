@extends('layouts.auth')

@section('content')

    <div class="col-12 bg-white h-100 mx-auto pb-5 py-md-5  w-100" >
        <div class="sign-in-from px-4">
            <div class="d-flex  align-items-center justify-content-center my-5 mt-md-0 mb-md-4">
                <img src="{{asset('temp/images/logo.png')}}" loading="lazy" width="50" height="50" class="img-fluid " alt="">
            </div>
            <h1 class="mb-0 text-center">{{__('Register')}}</h1>
            <p class="text-center mt-3">{{__('Enter your Information to register .')}}</p>


            <form class="mt-4 " method="post" action="{{route('register')}}">
                @csrf
                <div class="d-flex flex-column flex-md-row align-items-center">
                    <div class="d-flex flex-column align-items-center col-12 col-md-6 w-100">
                        {{-- First Name --}}
                        <div class="form-group col-12 w-100 p-0 ">
                            <input type="text" class="form-control mb-0 @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="{{__('First Name')}}" value="{{old('firstName')}}">
                            @error('firstName')
                            <div class="mt-1 text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        {{-- Last Name --}}
                        <div class="form-group col-12 w-100 p-0">
                            <input type="text" class="form-control mb-0 @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="{{__('Last Name')}}" value="{{old('lastName')}}">
                            @error('lastName')
                            <div class="mt-1 text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        {{-- Username --}}
                        <div class="form-group col-12 w-100 p-0">
                            <input type="text" class="form-control mb-0 @error('username') is-invalid @enderror" id="username" name="username" placeholder="{{__('Username')}}" value="{{old('username')}}">

                            @error('username')
                            <div class="mt-1 text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        @php

                        @endphp
                        {{-- University --}}
                        <div class="form-group col-12 w-100 p-0">
                            <select class="form-control mb-0 @error('university') is-invalid @enderror" id="university" name="university">

                                <option value="" disabled selected> {{__('University')}}</option>

                                @foreach(array_keys(config('universities.data')) as $uni)
                                <option>{{__($uni)}}</option>
                                @endforeach
                            </select>
                            @error('university')
                            <div class="mt-1 text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center col-12 col-md-6 w-100">

                        {{-- City --}}
                        <div class="form-group col-12 w-100 p-0">
                            <select class="form-control mb-0 @error('city') is-invalid @enderror" id="city" name="city">

                                <option value="" disabled selected> {{__('City')}}</option>

                                @foreach(config('cities.data') as $city)
                                    <option>{{__($city)}}</option>
                                @endforeach
                            </select>

                            @error('city')
                            <div class="mt-1 text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="form-group col-12 w-100 p-0">
                            <input type="text" class="form-control mb-0 @error('email') is-invalid @enderror" id="exampleInputEmail2" name="email" placeholder="{{__('Email')}}" value="{{old('email')}}">
                            @error('email')
                            <div class="mt-1 text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="form-group col-12 w-100 p-0">
                            <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" placeholder="{{__('Password')}}">
                            @error('password')
                            <div class="mt-1 text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div class="form-group col-12 w-100 p-0">
                            <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="exampleInputPassword2" name="password_confirmation" placeholder="{{__('Confirm Password')}}">
                            @error('password')
                            <div class="mt-1 text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Register Button --}}
                <div class="my-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary col-12 col-md-3 w-100 float-md-right ">{{__('Register')}}</button>

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
