@extends('layouts.app')

@section('content')
    <div class="header-for-bg">
        <div class="background-header position-relative">
            <img src="{{asset('temp/images/page-img/profile-bg5.jpg')}}" class="img-fluid rounded w-100 rounded rounded"
                 alt="profile-bg">
            <div class="title-on-header">
                <div class="data-block">
                    <h2>{{__('Your Photos')}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="user-images position-relative overflow-hidden border">
                            <a href="#">
                                @foreach($post->media as $media)
                                    <img src="{{asset('storage/'.$media->path)}}"
                                         class="img-fluid rounded w-100 h-100" style="max-height: 300px"
                                         alt="Responsive image">
                                @endforeach
                            </a>
                            <div class="image-hover-data h-25">
                                <div class="product-elements-icon">
                                    <ul class="d-flex align-items-center  justify-content-between text-center">
                                        <li><a href="#"
                                               class="pr-3 text-white d-flex align-items-center"> {{$post->likes->count()}}
                                                <i class="bi bi-heart mx-2 font-size-18"></i> </a></li>
                                        <li><a href="#"
                                               class="pr-3 text-white d-flex align-items-center"> {{$post->comments->count()}}
                                                <i class="bi bi-chat mx-2 font-size-18"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="mx-auto">
                        {{__('There is no posts to show')}}
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
