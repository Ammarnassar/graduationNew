<!doctype html>
<html @if (App::currentLocale() === 'ar') dir="rtl" @else dir="ltr" @endif lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Unibook</title>
    <link rel="shortcut icon" href="{{asset('temp/images/favicon.ico')}}" />

    @if (\Illuminate\Support\Facades\App::currentLocale() === 'ar')
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
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

</head>
<body >
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
    <div id="container-inside " class="d-none d-md-block">
        <div id="circle-small" style="left: -150px;"></div>
        <div id="circle-medium"  style="left: -300px;"></div>
        <div id="circle-large"  style="left: -450px;"></div>
        <div id="circle-xlarge "  style="left: -600px;"></div>
        <div id="circle-xxlarge"  style="left: -750px;"></div>

        <div id="circle-small" style="right: -150px;"></div>
        <div id="circle-medium"  style="right: -300px;"></div>
        <div id="circle-large"  style="right: -450px;"></div>
        <div id="circle-xlarge "  style="right: -600px;"></div>
        <div id="circle-xxlarge"  style="right: -750px;"></div>

    </div>
    <div class="container  d-flex flex-column justify-content-center align-items-center " style="min-height: 100vh;">
        <div class="row no-gutters w-100">
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
<script src="{{asset('temp/js/chart-custom.js')}}"></script>
<script src="{{asset('temp/js/custom.js')}}"></script>

</body>
</html>
