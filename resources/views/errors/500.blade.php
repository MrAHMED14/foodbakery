<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Something went wrong  </title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800">

    <link rel="icon" type="image/png" href="{{ asset('/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Food Bakery" />
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}" />

    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/iconmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/woocommerce.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/cs-foodbakery-plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/widget.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/rtl.css') }}" rel="stylesheet">
    <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/js/modernizr.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="main-section">
            <div class="page-section nopadding cs-nomargin">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="page-not-found">
                                <div class="cs-text">
                                    <span class="cs-error">500</span>
                                    <br>
                                    <span><strong>ERROR: </strong>Server error</span>
                                    <p>Something went wrong, and we're working on it. Please try again later. If the issue persists, let us know.</p>
                                </div>

                                <div>
                                    <a href="{{ route('front.index') }}" class="bgcolor" style="color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                                        <i class="icon-home2"></i>
                                        Return Home
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
