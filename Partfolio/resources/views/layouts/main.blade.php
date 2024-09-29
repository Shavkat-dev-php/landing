<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'PHP Commander')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('/img/favicon.png')}}" rel="icon">
    <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body id="page-top">

    @yield('content')

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{asset('/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('/lib/popper/popper.min.js')}}"></script>
<script src="{{asset('/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('/lib/counterup/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/lib/counterup/jquery.counterup.js')}}"></script>
<script src="{{asset('/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('/lib/typed/typed.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('/contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
