@extends('client.index')
@section('title')
    <title>Gói {{ strtoupper($page) }}</title>
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
                    <h3 class=h3-lg>Gói dịch vụ</h3>
                </div>
            </div>
            <div class=tab-content>
                <div aria-labelledby=tab1-list class="tab-pane fade show active" id=price-tab-1 role=tabpanel>
                    <div class="row d-flex align-items-center pricing-row primary-theme">
                        <div class="col-sm-12 col-md-4"></div>
                        <div class="col-sm-12 col-md-4">
                            <div class="pricing-table highlight">
                                <div class=pricing-plan>
                                    <h3 class=h3-xs>{{ strtoupper($page) }}</h3>
                                    <span class=price>{{ $pkg_info[$page][0] }}</span>
                                    <sup>VNĐ</sup>
                                </div>
                                <ul class=features>
                                    <li><i class="fas fa-stop-circle"></i> {{ $pkg_info[$page][1] }}</li>
                                    <li><i class="fas fa-stop-circle"></i> Miễn phí 7 ngày</li>
                                    <li><i class="fas fa-stop-circle"></i> Thời gian sử dụng {{ $pkg_info[$page][2] }}</li>
                                </ul>
                                <div class="table-footer">
                                    <form action="{{ route('home.reg') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="package" value="{{ $page }}">
                                        <button type="submit" class="btn btn-tra-grey black-hover">Đăng ký ngay</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
