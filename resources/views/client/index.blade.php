<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang=en> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang=en> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang=en> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang=en>

<!-- Mirrored from dsathemes.com/html/shiftkey/files/demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2020 03:57:29 GMT -->
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge"/>
    <meta name=viewport content="width=device-width, initial-scale=1.0"/>
    @yield('title')

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel=stylesheet>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:300,400,500,700,900" rel=stylesheet>
    <link href="{{ asset('assets/client/css/bootstrap.min.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/client/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/flaticon.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/client/css/magnific-popup.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/client/css/owl.carousel.min.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/client/css/owl.theme.default.min.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/client/css/animate.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/client/css/blue-theme.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/client/css/responsive.css') }}" rel=stylesheet>
</head>
<body>
<div id=loader-wrapper>
    <div id=loader>
<span class=cssload-loader>
<span class=cssload-loader-inner></span>
</span>
    </div>
</div>
<div id=page class=page>
    @include('client.layouts.nav')

    @yield('content')

    @include('client.layouts.footer')
</div>
<script src="{{ asset('assets/client/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/client/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.scrollto.js') }}"></script>
<script src="{{ asset('assets/client/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/client/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/client/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/client/js/hero-form.js') }}"></script>
<script src="{{ asset('assets/client/js/register-form.js') }}"></script>
<script src="{{ asset('assets/client/js/contact-form.js') }}"></script>
<script src="{{ asset('assets/client/js/quick-form.js') }}"></script>
<script src="{{ asset('assets/client/js/comment-form.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/client/js/wow.js') }}"></script>
<script src="{{ asset('assets/client/js/custom.js') }}"></script>
<script>new WOW().init();</script>
<!-- [if lt IE 9]>
<script src="{{ asset('assets/client/js/html5shiv.js') }}" type=text/javascript></script>
<script src="{{ asset('assets/client/js/respond.min.js') }}" type=text/javascript></script>
<![endif] -->
<script src="{{ asset('assets/client/js/changer.js') }}"></script>
<script defer src="{{ asset('assets/client/js/styleswitch.js') }}"></script>

@yield('script')
</body>

<!-- Mirrored from dsathemes.com/html/shiftkey/files/demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2020 03:58:07 GMT -->
</html>