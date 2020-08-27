@extends('client.index')
@section('title')
    <title>Gói dịch vụ</title>
@endsection

@section('content')
    <section class="page-hero-section division" id=pricing-page>
        <div class=container>
            <div class=row>
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="hero-txt text-center white-color">
                        <h3 class=h3-xl>Gói dịch vụ</h3>
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
                                    @if($package['code'] == 1)
                                        @if ($package['data']['packageCode'] == 'S3')
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Gói đang sử dụng</a>
                                        @else
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Không thể đăng ký gói</a>
                                        @endif
                                    @else
                                        <div class="table-footer">
                                            <form action="{{ route('home.reg') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="package" value="S3">
                                                <button type="submit" class="btn btn-tra-grey black-hover">Đăng ký ngay</button>
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
                                    @if($package['code'] == 1)
                                        @if ($package['data']['packageCode'] == 'S5')
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Gói đang sử dụng</a>
                                        @else
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Không thể đăng ký gói</a>
                                        @endif
                                    @else
                                        <div class="table-footer">
                                            <form action="{{ route('home.reg') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="package" value="S5">
                                                <button type="submit" class="btn btn-tra-grey black-hover">Đăng ký ngay</button>
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
                                    @if($package['code'] == 1)
                                        @if ($package['data']['packageCode'] == 'M3')
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Gói đang sử dụng</a>
                                        @else
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Không thể đăng ký gói</a>
                                        @endif
                                    @else
                                        <div class="table-footer">
                                            <form action="{{ route('home.reg') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="package" value="M3">
                                                <button type="submit" class="btn btn-tra-grey black-hover">Đăng ký ngay</button>
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
                                    @if($package['code'] == 1)
                                        @if ($package['data']['packageCode'] == 'M5')
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Gói đang sử dụng</a>
                                        @else
                                            <a href="#" class="btn btn-tra-grey black-hover disabled">Không thể đăng ký gói</a>
                                        @endif
                                    @else
                                        <div class="table-footer">
                                            <form action="{{ route('home.reg') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="package" value="M5">
                                                <button type="submit" class="btn btn-tra-grey black-hover">Đăng ký ngay</button>
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
@endsection

@section('script')
@endsection
