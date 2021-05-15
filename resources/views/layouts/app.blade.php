<!doctype html>
<html @if (App::currentLocale() === 'ar') dir="rtl" @else dir="ltr" @endif lang="en" >

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My University</title>
    <!-- Favicon -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('temp/images/favicon.ico')}}" />

    @if (App::currentLocale() === 'ar')
        <link rel="stylesheet" href="{{asset('temp/html-rtl/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html-rtl/css/typography.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html-rtl/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html-rtl/css/responsive.css')}}">

    @else
        <link rel="stylesheet" href="{{asset('temp/html/css/typography.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html/css/responsive.css')}}">
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @livewireStyles

</head>
<body class="right-column-fixed sidebar-main-active">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    <div class="iq-sidebar">
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li @if(Route::currentRouteName() == 'home') class="active" @endif>
                        <a href="/" class="iq-waves-effect"><i class="las la-newspaper"></i><span>{{__('Newsfeed')}}</span></a>
                    </li>
                    <li @if(Route::currentRouteName() == 'user.profile') class="active" @endif>
                        <a href="{{route('user.profile' , strtolower(auth()->user()->name))}}" class="iq-waves-effect"><i class="las la-user"></i><span>{{__('Profile')}}</span></a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="las la-user-friends"></i><span>{{__('Friends List')}}</span></a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="las la-users"></i><span>{{__('Groups')}}</span></a>
                    </li>
                    <li @if(Route::currentRouteName() == 'user.photos') class="active" @endif>
                        <a href="{{route('user.photos')}}" class="iq-waves-effect"><i class="las la-image"></i><span>{{__('Profile Image')}}</span></a>
                    </li>
                    <li @if(Route::currentRouteName() == 'user.videos') class="active" @endif>
                        <a href="{{route('user.videos')}}" class="iq-waves-effect"><i class="las la-video"></i><span>{{__('Profile Video')}}</span></a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="las la-bell"></i><span>{{__('Notification')}}</span></a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="las la-anchor"></i><span>{{__('Friend Request')}}</span></a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="lab la-rocketchat"></i><span>{{__('Chat')}}</span></a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="las la-check-circle"></i><span>{{__('Todo')}}</span></a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="las la-calendar"></i><span>{{__('Calendar')}}</span></a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect collapsed" ><i class="bi bi-envelope"></i><span>{{__('Email')}}</span></a>
                    </li>
                </ul>
            </nav>
            <div class="p-3"></div>
        </div>
    </div>

    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar" >
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="/">
                        <img src="{{asset('temp/images/logo.png')}}" loading="lazy" class="img-fluid" alt="">
                        <span>UniBook</span>
                    </a>
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="bi bi-list"></i></div>
                        </div>
                    </div>
                </div>
                <div class="iq-search-bar">
                    @if (session()->has('message'))
                        <div class="alert alert-success w-auto" style="margin-top: 50px;line-height: 25px !important; z-index: 10000 !important;" id="alert" role="alert">
                            {{ session('message') }}dds
                        </div>
                    @endif
                    <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="{{__('Type here to search...')}}">

                        <a class="search-link" href="#"><i class="bi bi-search"></i></a>
                    </form>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto navbar-list">
                        <li>
                            <a href="{{route('user.profile' , auth()->id())}}" class="iq-waves-effect d-flex align-items-center">
                                <img src="{{auth()->user()->avatar}}" class="img-fluid rounded-circle mr-3" alt="user">
                                <div class="caption">
                                    <h6 class="mb-0 line-height">
                                       {{auth()->user()->name}}
                                    </h6>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('home')}}" class="iq-waves-effect d-flex align-items-center">
                                <i class="bi bi-house-door"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="search-toggle iq-waves-effect" href="#"><i class="bi bi-person-plus" style="font-size: 20px"></i></a>
                            <div class="iq-sub-dropdown iq-sub-dropdown-large">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">Friend Request<small class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <div class="iq-friend-request">
                                            <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="{{asset('temp/images/user/01.jpg')}}" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Jaques Amole</h6>
                                                        <p class="mb-0">40  friends</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                    <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-friend-request">
                                            <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="{{asset('temp/images/user/02.jpg')}}" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Lucy Tania</h6>
                                                        <p class="mb-0">12  friends</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                    <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-friend-request">
                                            <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="{{asset('temp/images/user/03.jpg')}}" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Manny Petty</h6>
                                                        <p class="mb-0">3  friends</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                    <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-friend-request">
                                            <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="{{asset('temp/images/user/04.jpg')}}" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Marsha Mello</h6>
                                                        <p class="mb-0">15  friends</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                    <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" class="mr-3 btn text-primary">View More Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <div id="lottie-beil"></div>
                                <span class="bg-danger dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/01.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                    <p class="mb-0">95 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/02.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New customer is join</h6>
                                                    <small class="float-right font-size-12">5 days ago</small>
                                                    <p class="mb-0">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/03.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Two customer is left</h6>
                                                    <small class="float-right font-size-12">2 days ago</small>
                                                    <p class="mb-0">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/04.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                    <small class="float-right font-size-12">3 days ago</small>
                                                    <p class="mb-0">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <div id="lottie-mail"></div>
                                <span class="bg-primary count-mail"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/01.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                    <small class="float-left font-size-12">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/02.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                    <small class="float-left font-size-12">20 Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/03.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                                    <small class="float-left font-size-12">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/04.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Variations Passages</h6>
                                                    <small class="float-left font-size-12">12 Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('temp/images/user/05.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                    <small class="float-left font-size-12">5 Dec</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-list" style="">
                        <li>
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <i class="bi bi-arrow-down-circle"></i>
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown" >
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3 line-height">
                                            <h5 class="mb-0 text-white line-height">{{__('Hello')}} {{auth()->user()->name}}</h5>
                                            <span class="text-white font-size-12">{{__('Available')}}</span>
                                        </div>
                                        <a href="{{route('user.profile' , auth()->id())}}" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="bi bi-person-square"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">{{__('My Profile')}}</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{route('user.profile.edit')}}" class="iq-sub-card iq-bg-warning-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-warning">
                                                    <i class="bi bi-pencil-square"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">{{__('Edit Profile')}}</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{asset('temp/account-setting.html')}}" class="iq-sub-card iq-bg-info-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-info">
                                                    <i class="bi bi-gear"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">{{__('Account settings')}}</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{asset('temp/privacy-setting.html')}}" class="iq-sub-card iq-bg-danger-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-danger">
                                                    <i class="bi bi-sliders"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">{{__('Privacy Settings')}}</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="{{route('logout')}}" role="button">{{__('Sign out')}}<i class="bi bi-box-arrow-right mx-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- TOP Nav Bar END -->

    <!-- Right Sidebar Panel Start-->
    <div class=" right-sidebar right-sidebar-mini" style=" z-index: 10">
        <div class="right-sidebar-panel p-0">
            <div class="iq-card shadow-none">
                <div class="iq-card-body p-0">
                    <div class="media-height p-3">
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('temp/images/user/01.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Anna Sthesia</a></h6>
                                <p class="mb-0">Just Now</p>
                            </div>
                        </div>
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('temp/images/user/02.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Paul Molive</a></h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('temp/images/user/03.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Anna Mull</a></h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('temp/images/user/04.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Paige Turner</a></h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('temp/images/user/11.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Bob Frapples</a></h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                    </div>
                    <div class=" right-sidebar-toggle bg-primary mt-3">
                        <i class="bi bi-arrow-left side-left-icon"></i>
                        <i class="bi bi-arrow-right side-right-icon"><span class="ml-3 d-inline-block">Close Menu</span></i>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Sidebar Panel End-->

    <!-- Page Content  -->
    @yield('content')
</div>
<!-- Wrapper END -->
<!-- Footer -->
<footer class="bg-white iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="temp/html/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="temp/html/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
@livewireScripts

<!-- Footer END -->
<!-- Optional JavaScript -->

    <script src="{{asset('temp/js/jquery.min.js')}}"></script>
    <script src="{{asset('temp/js/popper.min.js')}}"></script>
    <script src="{{asset('temp/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('temp/js/jquery.appear.js')}}"></script>
    <script src="{{asset('temp/js/countdown.min.js')}}"></script>
    <script src="{{asset('temp/js/waypoints.min.js')}}"></script>
    <script src="{{asset('temp/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('temp/js/wow.min.js')}}"></script>
    <script src="{{asset('temp/js/apexcharts.js')}}"></script>
    <script src="{{asset('temp/js/slick.min.js')}}"></script>
    <script src="{{asset('temp/js/select2.min.js')}}"></script>
    <script src="{{asset('temp/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('temp/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('temp/js/smooth-scrollbar.js')}}"></script>
    <script src="{{asset('temp/js/lottie.js')}}"></script>
    <script src="{{asset('temp/js/core.js')}}"></script>
    <script src="{{asset('temp/js/charts.js')}}"></script>
    <script src="{{asset('temp/js/animated.js')}}"></script>
    <script src="{{asset('temp/js/kelly.js')}}"></script>
    <script src="{{asset('temp/js/maps.js')}}"></script>
    <script src="{{asset('temp/js/worldLow.js')}}"></script>
    <script src="{{asset('temp/js/chart-custom.js')}}"></script>
    <script src="{{asset('temp/js/custom.js')}}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</script>
<x-livewire-alert::scripts />

</body>
</html>
