<!doctype html>
<html @if (App::currentLocale() === 'ar') dir="rtl" @else dir="ltr" @endif lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My University</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap"
          rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('temp/images/favicon.ico')}}"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
          integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
          integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @livewireStyles

</head>
<body class="right-column-fixed sidebar-main-active">

<div class="wrapper">
    <div class="iq-sidebar">
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li @if(Route::currentRouteName() == 'home') class="active" @endif>
                        <a href="/" class="iq-waves-effect"><i
                                class="las la-newspaper"></i><span>{{__('Newsfeed')}}</span></a>
                    </li>
                    <li @if(Route::currentRouteName() == 'user.profile') class="active" @endif>
                        <a href="{{route('user.profile' , auth()->id())}}" class="iq-waves-effect"><i
                                class="las la-user"></i><span>{{__('Profile')}}</span></a>
                    </li>

                    <li>
                        <a href="#frinds" class="iq-waves-effect collapse show" data-toggle="collapse"
                           aria-expanded="false"><i class="las la-user-friends"></i><span>{{__('Persons')}}</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="frinds" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a class="" href="{{route('following')}}"><i
                                        class="fas fa-user-friends"></i>{{__('Following')}}
                                </a></li>
                            <li><a href="{{route('followers')}}"><i class="fas fa-plus"></i>{{__('Followers')}}</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#groups" class="iq-waves-effect collapsed" data-toggle="collapse"
                           aria-expanded="false"><i class="las la-users"></i><span>{{__('Groups')}}</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="groups" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('group.groups')}}"><i
                                        class="fas fa-user-friends"></i>{{__('Your Groups')}}</a></li>
                            <li><a href="{{route('group.create')}}"><i class="fas fa-plus"></i>{{__('Create Group')}}
                                </a></li>
                        </ul>
                    </li>
                    <li @if(Route::currentRouteName() == 'user.photos') class="active" @endif>
                        <a href="{{route('user.photos')}}" class="iq-waves-effect"><i
                                class="las la-image"></i><span>{{__('Profile Image')}}</span></a>
                    </li>
                    <li @if(Route::currentRouteName() == 'user.videos') class="active" @endif>
                        <a href="{{route('user.videos')}}" class="iq-waves-effect"><i
                                class="las la-video"></i><span>{{__('Profile Video')}}</span></a>
                    </li>
                    <li>
                        <a href="{{route('notifications')}}" class="iq-waves-effect"><i
                                class="las la-bell"></i><span>{{__('Notification')}}</span></a>
                    </li>
                    <li @if(Route::currentRouteName() == 'chat.index') class="active" @endif>
                        <a href="{{route('chat.index')}}" class="iq-waves-effect"><i
                                class="lab la-rocketchat"></i><span>{{__('Chat')}}</span></a>
                    </li>
                    <li>
                        <a href="{{route('email.inbox')}}" class="iq-waves-effect collapsed"><i
                                class="bi bi-envelope"></i><span>{{__('Email')}}</span></a>
                    </li>

                </ul>
            </nav>
            <div class="p-3"></div>
        </div>
    </div>


    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="/">
                        <img src="{{asset('temp/images/logo.png')}}" loading="lazy" class="img-fluid" alt="">
                        <span>My University</span>
                    </a>
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="bi bi-list"></i></div>
                        </div>
                    </div>
                </div>
                <div class="iq-search-bar">
                    @if (session()->has('message'))
                        <div class="alert alert-success w-auto"
                             style="margin-top: 50px;line-height: 25px !important; z-index: 10000 !important;"
                             id="alert" role="alert">
                            {{ session('message') }}dds
                        </div>
                    @endif

                    @if(\Illuminate\Support\Facades\Route::currentRouteName() != 'search')
                        <form class="searchbox ">
                            <a href="{{route('search')}}">
                                <input type="text" class="text search-input"
                                       placeholder="{{__('Click here to search...')}}">

                                <a class="search-link" href="#"><i class="bi bi-search"></i></a>
                            </a>
                        </form>
                    @endif

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto navbar-list">
                        <li>
                            <a href="{{route('user.profile' , auth()->id())}}"
                               class="iq-waves-effect d-flex align-items-center">
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
                                <i class="bi bi-house-door" style="font-size: 18px"></i>
                            </a>
                        </li>

                        <li class="d-md-none">
                            <a href="{{route('search')}}" class="iq-waves-effect d-flex align-items-center">
                                <i class="bi bi-search" style="font-size: 18px"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <div id="lottie-beil"></div>
                                <span class="bg-danger dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <livewire:notifications.notify/>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <div id="lottie-mail"></div>
                                <span class="bg-primary count-mail" style="font-size: 25px"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">All Messages<small
                                                    class="badge  badge-light float-right pt-1">5</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded"
                                                         src="{{asset('temp/images/user/01.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                    <small class="float-left font-size-12">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded"
                                                         src="{{asset('temp/images/user/02.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                    <small class="float-left font-size-12">20 Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded"
                                                         src="{{asset('temp/images/user/03.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                                    <small class="float-left font-size-12">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded"
                                                         src="{{asset('temp/images/user/04.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Variations Passages</h6>
                                                    <small class="float-left font-size-12">12 Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded"
                                                         src="{{asset('temp/images/user/05.jpg')}}" alt="">
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
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3 line-height">
                                            <h5 class="mb-0 text-white line-height">{{__('Hello')}} {{auth()->user()->name}}</h5>
                                            <span class="text-white font-size-12">{{__('Available')}}</span>
                                        </div>
                                        <a href="{{route('user.profile' , auth()->id())}}"
                                           class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="bi bi-person-square"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">{{__('My Profile')}}</h6>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="{{route('user.profile.edit')}}" class="iq-sub-card iq-bg-info-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-info">
                                                    <i class="bi bi-gear"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">{{__('Settings')}}</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="{{route('logout')}}"
                                               role="button">{{__('Sign out')}}<i
                                                    class="bi bi-box-arrow-right mx-2"></i></a>
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


    @include('layouts.chat-sidebar')

    @yield('content')
</div>


<footer class="bg-white iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                {{__('Copyright')}} 2021 ?? <a href="{{route('home')}}">{{__('My University')}}</a>
            </div>
        </div>
    </div>
</footer>
@livewireScripts


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
<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<x-livewire-alert::scripts/>

</body>
</html>
