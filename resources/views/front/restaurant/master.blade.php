<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'FOOD BAKERY')</title>
	<!-- Google Font Family Link Start -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800">
	<!-- Google Font Family Link End -->
	<!-- Bootstrap Link Start-->
	<link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/bootstrap-theme.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/bootstrap-datepicker.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/bootstrap-slider.css')}}" rel="stylesheet">
	<!-- Bootstrap Link End-->
	<!-- Iconmoon Link Start-->
	<link href="{{asset('front/css/iconmoon.css')}}" rel="stylesheet">
	<!-- Iconmoon Link End-->
	<!-- Animate Link Start-->
	<link href="{{asset('front/css/animate.css')}}" rel="stylesheet">
	<!-- Animate Link End-->
	<!-- Chosen Link Start-->
	<link href="{{asset('front/css/chosen.css')}}" rel="stylesheet">
	<!-- Chosen Link End-->
	<!-- Swiper Link Start-->
	<link href="{{asset('front/css/swiper.css')}}" rel="stylesheet">
	<!-- Swiper Link End-->
	<!-- Woocommerce Link Start-->
	<link href="{{asset('front/css/woocommerce.css')}}" rel="stylesheet">
	<!-- Woocommerce Link End-->
	<!-- Pretty Photo Link Start-->
	<link href="{{asset('front/css/prettyPhoto.css')}}" rel="stylesheet">
	<!-- Pretty Photo Link End-->
	<!-- Themes / plugin Link Start-->
	<link href="{{asset('front/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/cs-foodbakery-plugin.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/color.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/widget.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/rtl.css')}}" rel="stylesheet">
	<!-- Themes / plugin Link End-->
	<script src="{{asset('front/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('front/js/modernizr.js')}}"></script>
	<script src="{{asset('front/js/bootstrap.js')}}"></script>
</head>

<body>
	<!--Main Wrapper-->
	<div class="wrapper">
        <!-- ========== header Start ========== -->
        @include('front.restaurant.body.header')
        <!-- header End -->

        <!-- ============================================================== -->
        <!-- Start main Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- end main content-->

        <!-- ========== footer Start ========== -->
        @include('front.restaurant.body.footer')
        <!-- footer End -->
	</div>

	<!-- ========== modal_popup Start ========== -->
    @include('front.restaurant.body.modal_popup')
    <!-- modal_popup End -->

    <script src="{{asset('front/js/responsive.menu.js')}}"></script>
	<script src="{{asset('front/js/swiper.min.js')}}"></script>
	<script src="{{asset('front/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('front/js/chosen.js')}}"></script>
	<script src="{{asset('front/js/counter.js')}}"></script>
	<script src="{{asset('front/js/fliters.js')}}"></script>
	<script src="{{asset('front/js/jquery.fitvids.js')}}"></script>
	<script src="{{asset('front/js/jquery.growl.js')}}"></script>
	<script src="{{asset('front/js/jquery.matchHeight-min.js')}}"></script>
	<script src="{{asset('front/js/masonry.pkgd.js')}}"></script>
	<script src="{{asset('front/js/skills-progress.js')}}"></script>
	<script src="{{asset('front/js/bootstrap-slider.js')}}"></script>
	<script src="{{asset('front/js/wow.js')}}"></script>
	<script src="{{asset('front/js/functions-plugin.js')}}"></script>
	<script src="{{asset('front/js/functions.js')}}"></script>
</body>

</html>
