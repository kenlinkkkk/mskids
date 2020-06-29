<header class="main-header home-1">
    <div class="outer-container">
        <div class="container">
            <div class="main-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="#"><img src="{{ asset('assets/client/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                @if (session()->get('_user')['msisdn'] != 'empty')
                                    <li><a href="#" class="disable">Xin chào: 0{{ substr(substr(session()->get('_user')['msisdn'], -9),0 , 5) }}xxxx</a></li>
                                @endif
                                <li><a href="{{ route('home.index') }}">Trang chủ</a></li>
                                <li><a href="#gioithieu">Giới thiệu</a></li>
                                <li><a href="#goidichvu">Gói dịch vụ</a></li>
                                <li><a href="#aboutme">Về chúng tôi</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="#"><img src="{{ asset('assets/client/images/logo.png') }}" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                </nav>
            </div>
        </div>
    </div>
</header>
