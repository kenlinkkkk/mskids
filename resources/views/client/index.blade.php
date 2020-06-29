<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    @yield('title')
<!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/client/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;531;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/client/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/owl.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('assets/client/css/bootstrap.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('assets/client/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/imagebg.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/responsive.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154803173-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-154803173-1');
    </script>
</head>
<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader" style="background-image:url('{{ asset('assets/client/images/icons/preloader-20.gif') }}');"></div>
    <!-- preloader -->

    <!-- main header -->
    @include('client.layouts.nav')
    <!-- main-header end -->

    @yield('content')


    <!-- main-footer -->
    @include('client.layouts.footer')
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>

    <!-- jequery plugins -->
    <script src="{{ asset('assets/client/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/client/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/owl.js') }}"></script>
    <script src="{{ asset('assets/client/js/wow.js') }}"></script>
    <script src="{{ asset('assets/client/js/validation.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/client/js/appear.js') }}"></script>
    <script src="{{ asset('assets/client/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/client/js/tilt.jquery.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/client/js/script.js') }}"></script>
    @yield('script')
</body>
</html>
