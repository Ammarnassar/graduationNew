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

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title text-primary">{{__('Upcoming Birthday')}}</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="media-story m-0 p-0">
                                <li class="d-flex mb-4 align-items-center">
                                    <img src="temp/html/images/user/01.jpg" alt="story-img" class="rounded-circle img-fluid">
                                    <div class="stories-data ml-3">
                                        <h5>Anna Sthesia</h5>
                                        <p class="mb-0">Today</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <img src="temp/html/images/user/02.jpg" alt="story-img" class="rounded-circle img-fluid">
                                    <div class="stories-data ml-3">
                                        <h5>Paul Molive</h5>
                                        <p class="mb-0">Tomorrow</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title text-primary">{{__('Suggested Groups')}}</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="suggested-page-story m-0 p-0 list-inline">
                                <li class="mb-3">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="temp/images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                        <div class="stories-data ml-3">
                                            <h5>Iqonic Studio</h5>
                                            <p class="mb-0">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src="temp/images/small/img-1.jpg" class="img-fluid rounded" alt="Responsive image">
                                    <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                                </li>
                                <li class="">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="temp/images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                        <div class="stories-data ml-3">
                                            <h5>Cakes & Bakes </h5>
                                            <p class="mb-0">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src="temp/images/small/img-2.jpg" class="img-fluid rounded" alt="Responsive image">
                                    <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <img src="temp/html/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                </div>
            </div>
        </div>
    </div>
@endsection
