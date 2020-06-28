@extends('client.index')
@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('home.index') }}"><img src="{{ asset('assets/client/images/logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"></div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section">
        <div class="bg-layer" style="background-image: url('{{ asset('assets/client/images/icons/banner-1.png') }}');"></div>
        <div class="pattern-bg" style="background-image: url({{ asset('assets/client/images/icons/vactor-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box text-justify">
                        <h1>Safe Kids</h1>
                        <div class="text">Dịch vụ giám sát trẻ em MobiFone Safe Kids.</div>
                        <div class="text">Ứng dụng giúp phụ huynh giúp định vị, quản lý giới hạn các ứng dụng và website có thể truy nhập, quản lý thời gian truy nhập và cho phép gọi khẩn cấp khi cần thiết.</div>
                        <div class="btn-box"><a href="#">Tải app ngay</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box float-bob-y clearfix">
                        <figure class="image image-1 wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms"><img src="{{ asset('assets/client/images/resource/phone-1.png') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- feature-section -->
    <section class="feature-section" id="gioithieu">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div id="iamge_block_01">
                        <div class="image-box float-bob-y">
                            <figure class="image wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('assets/client/images/resource/phone-3.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Tính năng nổi bật</h2>
                            </div>
                            <div class="inner-box wow fadeInUp text-justify" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="bg-layer" style="background-image: url('{{ asset('assets/client/images/resource/case-4.png') }}');"></div>
                                            <h5><a href="#">Tổng quan</a></h5>
                                            <div class="text">Tổng quan về thời gian, thói quen và nội dung tìm kiếm, sử dụng Internet của đối tượng bị quản lý</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                            <div class="bg-layer" style="background-image: url('{{ asset('assets/client/images/resource/case-4.png') }}');"></div>
                                            <h5><a href="#">Chi tiết</a></h5>
                                            <div class="text">Theo dõi chi tiết thời gian, khung giờ sử dụng web/app và bảo vệ khỏi các trang web độc hại.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                            <div class="bg-layer" style="background-image: url('{{ asset('assets/client/images/resource/case-4.png') }}');"></div>
                                            <h5><a href="#">Lên lịch và giới hạn</a></h5>
                                            <div class="text">Cho phép bạn thiết lập các giới hạn sử dụng thiết bị hàng ngày và thời gian có thể sử dụng để lướt web trên Internet.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                            <div class="bg-layer" style="background-image: url('{{ asset('assets/client/images/resource/case-4.png') }}');"></div>
                                            <h5><a href="#">Định vị</a></h5>
                                            <div class="text">Định vị thiết bị di động theo thời gian thực. Đảm bảo luôn biết vị trí của con bất kỳ thời điểm nào trong ngày.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                            <div class="bg-layer" style="background-image: url('{{ asset('assets/client/images/resource/case-4.png') }}');"></div>
                                            <h5><a href="#">Bộ lọc web</a></h5>
                                            <div class="text">Bộ lọc Internet trong ứng dụng sẽ quét nội dung của trang web mà bạn sắp truy cập trong thời gian thực.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1500ms">
                                            <div class="bg-layer" style="background-image: url('{{ asset('assets/client/images/resource/case-4.png') }}');"></div>
                                            <h5><a href="#">Khóa và cảnh báo</a></h5>
                                            <div class="text">Khóa kết nối mạng hoặc khóa toàn bộ thiết bị không cho trẻ sử dụng. Cảnh báo đến người quản trị. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section -->

    <!-- pricing-section -->
    <section class="pricing-section centred" id="goidichvu">
        <div class="container">
            <div class="sec-title center">
                <h2>GÓI DỊCH VỤ</h2>
{{--                <p>We provide best price plan for our customer check the list now<br />and slect now plan.</p>--}}
            </div>
            <div class="tabs-box">
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 pricing-column">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <figure class="image"><img src="{{ asset('assets/client/images/icons/price-icon-1.png') }}" alt=""></figure>
                                        <div class="table-header">
                                            <h1 class="title">S3</h1>
                                            <h2 class="price">30.000<span>/Tháng</span></h2>
                                        </div>
                                        <div class="table-content">
                                            <ul>
                                                <li>Sử dụng cho 3 thiết bị</li>
                                                <li>Miễn phí 7 ngày đầu</li>
                                                <li>Thời gian sử dụng: 1 tháng</li>
                                            </ul>
                                        </div>
                                        @if(session()->get('_user')['msisdn'] != 'empty')
                                            @if($package['code'] == 1)
                                                @if ($package['data']['packageCode'] == 'S3')
                                                    <a href="#" class="theme-btn-two disabled">Gói đang sử dụng</a>
                                                @else
                                                    <a href="#" class="theme-btn-two disabled">Không thể đăng ký gói</a>
                                                @endif
                                            @else
                                                <div class="table-footer">
                                                    <form action="{{ route('home.reg') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="package" value="S3">
                                                        <button type="submit" class="theme-btn-two">Đăng ký ngay</button>
                                                    </form>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pricing-column">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <figure class="image"><img src="{{ asset('assets/client/images/icons/price-icon-2.png') }}" alt=""></figure>
                                        <div class="table-header">
                                            <h1 class="title">S5</h1>
                                            <h2 class="price">40.000<span>/Tháng</span></h2>
                                        </div>
                                        <div class="table-content">
                                            <ul>
                                                <li>Sử dụng cho 5 thiết bị</li>
                                                <li>Miễn phí 7 ngày đầu</li>
                                                <li>Thời gian sử dụng: 1 tháng</li>
                                            </ul>
                                        </div>
                                        @if(session()->get('_user')['msisdn'] != 'empty')
                                            @if($package['code'] == 1)
                                                @if ($package['data']['packageCode'] == 'S5')
                                                    <a href="#" class="theme-btn-two disabled">Gói đang sử dụng</a>
                                                @else
                                                    <a href="#" class="theme-btn-two disabled">Không thể đăng ký gói</a>
                                                @endif
                                            @else
                                                <div class="table-footer">
                                                    <form action="{{ route('home.reg') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="package" value="S5">
                                                        <button type="submit" class="theme-btn-two">Đăng ký ngay</button>
                                                    </form>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 pricing-column">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <figure class="image"><img src="{{ asset('assets/client/images/icons/price-icon-1.png') }}" alt=""></figure>
                                        <div class="table-header">
                                            <h1 class="title">M3</h1>
                                            <h2 class="price">300.000<span>/Năm</span></h2>
                                        </div>
                                        <div class="table-content">
                                            <ul>
                                                <li>Sử dụng cho 3 thiết bị</li>
                                                <li>Miễn phí 7 ngày đầu</li>
                                                <li>Thời gian sử dụng: 1 năm</li>
                                            </ul>
                                        </div>
                                        @if(session()->get('_user')['msisdn'] != 'empty')
                                            @if($package['code'] == 1)
                                                @if ($package['data']['packageCode'] == 'M3')
                                                    <a href="#" class="theme-btn-two disabled">Gói đang sử dụng</a>
                                                @else
                                                    <a href="#" class="theme-btn-two disabled">Không thể đăng ký gói</a>
                                                @endif
                                            @else
                                                <div class="table-footer">
                                                    <form action="{{ route('home.reg') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="package" value="M3">
                                                        <button type="submit" class="theme-btn-two">Đăng ký ngay</button>
                                                    </form>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pricing-column">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <figure class="image"><img src="{{ asset('assets/client/images/icons/price-icon-2.png') }}" alt=""></figure>
                                        <div class="table-header">
                                            <h1 class="title">M5</h1>
                                            <h2 class="price">400.000<span>/Năm</span></h2>
                                        </div>
                                        <div class="table-content">
                                            <ul>
                                                <li>Sử dụng cho 3 thiết bị</li>
                                                <li>Miễn phí 7 ngày đầu</li>
                                                <li>Thời gian sử dụng: 1 năm</li>
                                            </ul>
                                        </div>
                                        @if(session()->get('_user')['msisdn'] != 'empty')
                                            @if($package['code'] == 1)
                                                @if ($package['data']['packageCode'] == 'M5')
                                                    <a href="#" class="theme-btn-two disabled">Gói đang sử dụng</a>
                                                @else
                                                    <a href="#" class="theme-btn-two disabled">Không thể đăng ký gói</a>
                                                @endif
                                            @else
                                                <div class="table-footer">
                                                    <form action="{{ route('home.reg') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="package" value="M5">
                                                        <button type="submit" class="theme-btn-two">Đăng ký ngay</button>
                                                    </form>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-btn-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">Tháng</li>
                        <li class="tab-btn" data-tab="#tab-2">Năm</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->


    <!-- download-section -->
    <section class="download-section">
        <div class="bg-layer wow slideInLeft animated" style="background-image: url('{{ asset('assets/client/images/icons/shap-3.png') }}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_05">
                        <div class="content-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h2>Tải ứng dụng ngay!</h2></div>
                            <div class="text">Have you ever heard the expression,<br />“Do not count your chickens before they hatch?”  Maybe an older, wiser individual</div>
                            <div class="download-btn">
                                <a href="#" class="app-store-btn">
                                    <i class="fab fa-apple"></i>
                                    <span>Download on the</span>
                                    App Store
                                </a>
                                <a href="#" class="google-play-btn">
                                    <i class="fab fa-android"></i>
                                    <span>Get on it</span>
                                    Google Play
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="iamge_block_04">
                        <div class="image-box">
                            <figure class="image image-1 wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{ asset('assets/client/images/resource/phone-4.png') }}" alt=""></figure>
                            <figure class="image image-2 wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms"><img src="{{ asset('assets/client/images/resource/phone-5.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- download-section end -->
@endsection

@section('script')
@endsection