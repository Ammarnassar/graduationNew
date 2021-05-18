@extends('layouts.app')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-8  row m-0 p-0">
                    <div class=" col-lg-12 ">
                        <div class="stories-data text-dark iq-card iq-card-stretch p-3 shadow" >
                            <a href="{{route('trend.show' , $trend->id)}}" class="p-0 btn btn-link text-dark font-weight-bold font-size-16" dir="auto">{{$trend->name}}</a>
                            <div class="mb-0 font-size-12">{{$trend->posts()->count()}} {{__('post')}}</div>
                        </div>
                        <div id="post-modal-data" class="iq-card iq-card-stretch shadow-none mt-4">
                            @forelse($posts as $post)
                                <livewire:post.simple-card :post="$post" :key="$post->id">
                            @empty

                                {{__('There is no posts to show')}}

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
