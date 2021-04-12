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
            <div class=row>
                <div class="col-lg-10 offset-lg-1 section-title">
                    <h3 class=h3-lg>Hướng dẫn sử dụng dịch vụ</h3>
                    <h4 class="h4-lg">Đầu số dịch vụ: 9337</h4>
                    <ul class="custom-ul">
                        <li><span>1</span> Chọn sản phẩm bạn muốn</li>
                        <li><span>2</span> Gửi tin nhắn SMS với mã tương ứng đến 9337</li>
                        <li style="color: #1c6ca1"><span>3</span> Tận hưởng dịch vụ!</li>
                    </ul>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Nội dung</th>
                            <th>Gói dịch vụ</th>
                            <th>Cú pháp</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="4">1</td>
                            <td rowspan="4">Đăng ký gói</td>
                            <td><strong>M3</strong></td>
                            <td><strong>DK M3</strong></td>
                        </tr>
                        <tr>
                            <td><strong>M5</strong></td>
                            <td><strong>DK M5</strong></td>
                        </tr>
                        <tr>
                            <td><strong>S3</strong></td>
                            <td><strong>DK S3</strong></td>
                        </tr>
                        <tr>
                            <td><strong>S5</strong></td>
                            <td><strong>DK S5</strong></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="2">Hủy gói</td>
                            <td><strong>HUY (mã gói)</strong></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2">Tra cứu thông tin dịch vụ</td>
                            <td><strong>HD (mã gói)</strong></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td colspan="2">Kiểm tra gói cước đang sử dụng</td>
                            <td><strong>KT</strong></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td colspan="2">Lấy mật khẩu</td>
                            <td><strong>MK</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('style')
<style>
    .custom-ul {
        font-size: 1.2rem;
        line-height: 2.5rem;
    }

    .custom-ul span {
        font-weight: bold;
        color: white;
        background-color: #1c6ca1;
        border: 1px solid #1c6ca1;
        padding: 2px 5px;
        width: 25px;
        height: 25px;
        border-radius: 50%;
    }
</style>
@endsection

@section('script')
@endsection
