@extends('client.index')
@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <section id=hero-3 class="bg-scroll hero-section division">
        <div class=container>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="hero-txt mb-40 white-color">
                        <h2 class=txt-500>Safe Kids</h2>
                        <p class=p-md>Dịch vụ giám sát trẻ em  Mobifone Safe Kids</p>
                        <p class=p-md>Ứng dụng giúp phụ huynh giúp định vi, quản lý giới hạn các ứng dụng và website  có thể truy cập, quản lý thòi gian truy cập và cho phép gọi khẩn cấp khi cần thiết</p>
                        <div class=stores-badge>
                            <a href="https://apps.apple.com/us/app/mobifone-global-safekids/id1533642275" class=store>
                                <img class=appstore-original src="{{ asset('assets/client/images/store_badges/appstore.png') }}" alt=appstore-logo/>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.mskids.me" class=store>
                                <img class=googleplay-original src={{ asset('assets/client/images/store_badges/googleplay.png') }} alt=googleplay-logo/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="hero-3-img text-center">
                        <img class=img-fluid src="{{ asset(config('view.top_screenshot')) }}" alt=hero-image>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-fixed hero-3-wave"></div>
    </section>

    <section id=services-4 class="wide-50 services-section division">
        <div class=container>
            <div class=row>
                <div class="col-lg-10 offset-lg-1 section-title">
                    <h3 class=h3-md>Tính năng nổi bật</h3>
                </div>
            </div>
            <div class=row>
                <div class="col-sm-6 col-md-4">
                    <div class="sbox-4 wow fadeInUp" data-wow-delay=0.2s>
                        <img class=img-65 src="{{ asset('assets/client/images/icons/communication.png') }}" alt=service-icon/>
                        <div class=sbox-4-txt>
                            <h5 class=h5-sm>Tổng quan</h5>
                            <p>Tổng quan về thời gian, thói quen và nội dung tìm kiếm, sử dụng Internet của đối tượng được quản lý.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="sbox-4 wow fadeInUp" data-wow-delay=0.4s>
                        <img class=img-65 src="{{ asset('assets/client/images/icons/smartphone-1.png') }}" alt=service-icon/>
                        <div class=sbox-4-txt>
                            <h5 class=h5-sm>Chi tiết</h5>
                            <p>Theo dõi thời gian, khung giờ sử dụng web/app và bảo vệ khỏi các trang web độc hại.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="sbox-4 wow fadeInUp" data-wow-delay=0.6s>
                        <img class=img-65 src="{{ asset('assets/client/images/icons/calendar-1.png') }}" alt=service-icon/>
                        <div class=sbox-4-txt>
                            <h5 class=h5-sm>Lên lịch và giới hạn</h5>
                            <p>Cho phép bạn thiết lập các giới hạn sử dụng thiết bị hằng ngày và thời gian có thể sử dụng để lướt web trên Internet</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="sbox-4 wow fadeInUp" data-wow-delay=0.8s>
                        <img class=img-65 src="{{ asset('assets/client/images/icons/notification.png') }}" alt=service-icon/>
                        <div class=sbox-4-txt>
                            <h5 class=h5-sm>Định vị</h5>
                            <p>Định vị thiết bị di động theo thời gian thực. Đảm bảo luôn biết vị trí của con bất kỳ thời điểm nào.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="sbox-4 wow fadeInUp" data-wow-delay=1s>
                        <img class=img-65 src="{{ asset('assets/client/images/icons/smartphone-3.png') }}" alt=service-icon/>
                        <div class=sbox-4-txt>
                            <h5 class=h5-sm>Bộ lọc web</h5>
                            <p>Bộ lọc Internet trong ứng dụng sẽ quét nội dung của trang web mà bạn sắp truy cập trong thời gian thực.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="sbox-4 wow fadeInUp" data-wow-delay=1.2s>
                        <img class=img-65 src="{{ asset('assets/client/images/icons/key-1.png') }}" alt=service-icon/>
                        <div class=sbox-4-txt>
                            <h5 class=h5-sm>Khóa và cảnh báo</h5>
                            <p>Khóa kết nối mạng hoặc khóa toàn bộ thiết bị không cho trẻ sử dụng. Cảnh báo đến người quản trị.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-60 pricing-page-section" id=pricing-2>
        <div class=container>
            <div class=row>
                <div class="col-lg-10 offset-lg-1 section-title">
                    <h3 class=h3-lg>Các gói dịch vụ</h3>
                    <h4 class="text-center">Chọn số dòng bạn muốn bảo vệ và sau đó làm theo hướng dẫn để sử dụng dịch vụ</h4>
                </div>
            </div>
            <div class=tab-content>
                <div aria-labelledby=tab1-list class="tab-pane fade show active" id=price-tab-1 role=tabpanel>
                    <div class="row d-flex align-items-center pricing-row primary-theme">
                        <div class=col-md-3>
                            <div class=pricing-table>
                                <div class=pricing-plan>
                                    <h3 class=h3-xs>S3</h3>
                                    <span class=price>30.000</span>
                                    <sup>VNĐ</sup>
                                    <p class=p-md>Tháng</p>
                                </div>
                                <ul class=features>
                                    <li><i class="fas fa-stop-circle"></i> 3 thiết bị</li>
                                    <li><i class="fas fa-stop-circle"></i> Miễn phí 7 ngày</li>
                                    <li><i class="fas fa-stop-circle"></i> Thời gian sử dụng 1 tháng</li>
                                </ul>
                                @if(session()->get('_user')['msisdn'] != 'empty')
                                    @if ($package['data']['status'] == 1)
                                        @if ($package['data']['packageCode'] == 'S3')
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Gói đang sử dụng</a>
                                        @endif
                                    @else
                                        <div class="table-footer">
                                            <form action="{{ route('home.reg') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="package" value="S3">
                                                <button type="submit" class="btn btn-tra-grey black-hover">Mua dịch vụ</button>
                                            </form>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class=col-md-3>
                            <div class="pricing-table highlight">
                                <div class=pricing-plan>
                                    <h3 class=h3-xs>S5</h3>
                                    <span class=price>40.000</span>
                                    <sup>VNĐ</sup>
                                    <p class=p-md>Tháng</p>
                                </div>
                                <ul class=features>
                                    <li><i class="fas fa-stop-circle"></i> 5 thiết bị</li>
                                    <li><i class="fas fa-stop-circle"></i> Miễn phí 7 ngày</li>
                                    <li><i class="fas fa-stop-circle"></i> Thời gian sử dụng 1 tháng</li>
                                </ul>
                                @if(session()->get('_user')['msisdn'] != 'empty')
                                    @if ($package['data']['status'] == 1)
                                        @if ($package['data']['packageCode'] == 'S5')
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Gói đang sử dụng</a>
                                        @endif
                                    @else
                                        <div class="table-footer">
                                            <form action="{{ route('home.reg') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="package" value="S5">
                                                <button type="submit" class="btn btn-tra-grey black-hover">Mua dịch vụ</button>
                                            </form>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class=col-md-3>
                            <div class="pricing-table highlight">
                                <div class=pricing-plan>
                                    <h3 class=h3-xs>M3</h3>
                                    <span class=price>300.000</span>
                                    <sup>VNĐ</sup>
                                    <p class=p-md>Năm</p>
                                </div>
                                <ul class=features>
                                    <li><i class="fas fa-stop-circle"></i> 3 thiết bị</li>
                                    <li><i class="fas fa-stop-circle"></i> Miễn phí 7 ngày</li>
                                    <li><i class="fas fa-stop-circle"></i> Thời gian sử dụng 1 năm</li>
                                </ul>
                                @if(session()->get('_user')['msisdn'] != 'empty')
                                    @if ($package['data']['status'] == 1)
                                        @if ($package['data']['packageCode'] == 'M3')
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Gói đang sử dụng</a>
                                        @endif
                                    @else
                                        <div class="table-footer">
                                            <form action="{{ route('home.reg') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="package" value="M3">
                                                <button type="submit" class="btn btn-tra-grey black-hover">Mua dịch vụ</button>
                                            </form>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class=col-md-3>
                            <div class=pricing-table>
                                <div class=pricing-plan>
                                    <h3 class=h3-xs>M5</h3>
                                    <span class=price>400.000</span>
                                    <sup>VNĐ</sup>
                                    <p class=p-md>Năm</p>
                                </div>
                                <ul class=features>
                                    <li><i class="fas fa-stop-circle"></i> 5 thiết bị</li>
                                    <li><i class="fas fa-stop-circle"></i> Miễn phí 7 ngày</li>
                                    <li><i class="fas fa-stop-circle"></i> Thời gian sử dụng 1 năm</li>
                                </ul>
                                @if(session()->get('_user')['msisdn'] != 'empty')
                                    @if ($package['data']['status'] == 1)
                                        @if ($package['data']['packageCode'] == 'M5')
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Gói đang sử dụng</a>
                                        @endif
                                    @else
                                        <div class="table-footer">
                                            <form action="{{ route('home.reg') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="package" value="M5">
                                                <button type="submit" class="btn btn-tra-grey black-hover">Mua dịch vụ</button>
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
    </section>

    <section id=cta-3 class=cta-section>
        <div class="blue-textured cta-3-content division">
            <div class="container white-color">
                <div class="row d-flex align-items-center">
                    <div class=col-md-6>
                        <div class="cta-txt pc-45">
                            <h3 class=h3-lg>Bảo vệ con trẻ với  Safe Kids</h3>
                            <p class=p-md></p>
                            <div class=stores-badge>
                                <a href="https://apps.apple.com/us/app/mobifone-global-safekids/id1533642275" class=store>
                                    <img class=appstore-white src="{{ asset('assets/client/images/store_badges/appstore-tra-white.png') }}" alt=appstore-logo>
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.mskids.me" class=store>
                                    <img class=googleplay-white src="{{ asset('assets/client/images/store_badges/googleplay-tra-white.png') }}" alt=googleplay-logo>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=col-md-6>
                        <div class="cta-3-img text-center pr-45">
                            <img class=img-fluid src="{{ asset(config('view.app_content')) }}" alt=cta-image>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
