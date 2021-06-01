@extends('layouts.app')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 row m-0 p-0">
                    <div class="col-sm-12 h-auto w-100">
                        <div id="post-modal-data" class="iq-card  iq-card-stretch ">

                            <livewire:post.new-post />
                        </div>
                    </div>
                    <div class="col-sm-12 post-card-column "  >
                        <livewire:post.index :posts="$posts" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <livewire:trend.card />


                </div>
                <div class="col-sm-12 text-center">
                    <img src="temp/html/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                </div>
            </div>
        </div>
    </div>
@endsection
