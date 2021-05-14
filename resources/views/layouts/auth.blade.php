<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Unibook</title>

    @if (\Illuminate\Support\Facades\App::currentLocale() === 'ar')
        <link rel="shortcut icon" href="{{asset('temp/html-rtl/images/favicon.ico')}}" />
        <link rel="stylesheet" href="{{asset('temp/html-rtl/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html-rtl/css/typography.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html-rtl/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html-rtl/css/responsive.css')}}">

    @else
        <link rel="shortcut icon" href="{{asset('temp/images/favicon.ico')}}" />
        <link rel="stylesheet" href="{{asset('temp/html/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html/css/typography.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('temp/html/css/responsive.css')}}">
    @endif
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
    <div id="container-inside">
        <div id="circle-small"></div>
        <div id="circle-medium"></div>
        <div id="circle-large"></div>
        <div id="circle-xlarge"></div>
        <div id="circle-xxlarge"></div>
    </div>
    <div class="container p-0">
        <div class="row no-gutters">
            <div class="col-md-6 text-center pt-5">
                <div class="sign-in-detail text-white">
                    <a class="sign-in-logo mb-5" href="#"><img src="{{asset('temp/images/logo-full.png')}}" class="img-fluid" alt="logo"></a>
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                        <div class="item">
                            <img src="{{asset('temp/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src="{{asset('temp/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src="{{asset('temp/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</section>
<!-- Sign in END -->
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

</body>
</html>
