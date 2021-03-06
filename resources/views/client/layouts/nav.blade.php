<header id=header class=header>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-tra hover-menu">
        <div class=container>
            <button class="navbar-toggler navbar-left" type=button data-toggle=collapse data-target=#navbarSupportedContent aria-controls=navbarSupportedContent aria-expanded=false aria-label="Toggle navigation">
                <span class=navbar-bar-icon><i class="fas fa-bars"></i></span>
            </button>
            <a href="{{ route('home.index') }}" class="navbar-brand logo-black"><img src="{{ asset('assets/client/images/logo-sk.png') }}" width="150" alt=header-logo></a>
            <a href="{{ route('home.index') }}" class="navbar-brand logo-white"><img src="{{ asset('assets/client/images/logo-sk.png') }}" width="150" alt=header-logo></a>
            <div id=navbarSupportedContent class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    @if (!empty(session()->get('_user')) && session()->get('_user')['msisdn'] != 'empty')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Xin chào: 0{{ substr(substr(session()->get('_user')['msisdn'], -9),0 , 5) }}xxxx
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://my.mskids.vn/user">Thay đổi thông tin cá nhân</a>
                            <a class="dropdown-item" href="{{ route('home.logs') }}">Trạng thái tài khoản</a>
                            <a class="dropdown-item" href="https://my.mskids.vn/user/pin">Đổi mật khẩu</a>
                        </div>
                    </li>
                    @endif
                    <li class="nav-item nl-simple"><a class="nav-link text-left" href="{{ route('home.index') }}">Trang chủ</a></li>
                    <li class="nav-item nl-simple"><a class="nav-link text-left" href=#hero-3>Giới thiệu</a></li>
                    <li class="nav-item nl-simple"><a class="nav-link text-left" href=#footer-2>Về chúng tôi</a></li>
                    @if ($nav_item->count() > 0)
                        @foreach($nav_item as $item)
                                <li class="nav-item nl-simple"><a class="nav-link text-left" href="{{ route('viewPage', [$item->short_tag]) }}">{{ $item->name }}</a></li>
                        @endforeach
                    @endif
                </ul>
                <span class="navbar-text white-color">
                    <a href="{{ route('home.regPage') }}" class="btn btn-tra-white primary-color-hover">Mua dịch vụ</a>
                </span>
            </div>
        </div>
    </nav>
</header>
