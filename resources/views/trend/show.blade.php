@extends('layouts.app')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-8  row m-0 p-0">
                    <div class=" col-lg-12 ">
                        <div id="post-modal-data" class="iq-card iq-card-stretch ">
                            @forelse($trend->posts as $post)
                                <livewire:post.card :post="$post" :key="$post->id">
                            @empty
                                No Posts

                            @endforelse
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
