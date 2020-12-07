@extends('client.index')
@section('title')
    <title>Trạng thái tài khoản</title>
@endsection

@section('content')
    <section class="page-hero-section division" id=pricing-page>
        <div class=container>
            <div class=row>
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="hero-txt text-center white-color">
                        <h3 class=h3-xl>Trạng thái tài khoản</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-60 pricing-page-section" id=pricing-2>
        <div class=container>
            <div class=row>
                <div class="col-lg-10 offset-lg-1 section-title">
                    <h3 class=h3-lg>Trạng thái tài khoản</h3>
                </div>
                <div class="col-lg-12 offset-lg-1 table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Gói dịch vụ</th>
                            <th>Thời gian kích hoạt gói</th>
                            <th>Thời gian hết hạn</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $log_action['data']['packageCode'] }}</td>
                            <td>{{ $log_action['data']['activeTime'] }}</td>
                            <td>{{ $log_action['data']['expireTime'] }}</td>
                        </tr>
                        </tbody>
                    </table>
{{--                    <table class="table table-responsive">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>STT</th>--}}
{{--                            <th>Gói</th>--}}
{{--                            <th>Hành động</th>--}}
{{--                            <th>Kênh sử dụng</th>--}}
{{--                            <th>Trạng thái</th>--}}
{{--                            <th>Thời gian</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @if(!empty($logs_action['data']))--}}
{{--                            @foreach($logs_action['data'] as $action)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $loop->index + 1 }}</td>--}}
{{--                                    <td>{{ $action['packageCode'] }}</td>--}}
{{--                                    <td>{{ $action['action'] == 'CANCEL' ? 'Hủy' : $action['action'] == 'EXTEND' ? 'Gia hạn' : $action['action'] == 'REGNEW' ? 'Đăng ký mới' : 'Đăng ký' }}</td>--}}
{{--                                    <td>{{ $action['channel'] }}</td>--}}
{{--                                    <td>{{ $action['resultMessage'] }}</td>--}}
{{--                                    <td>{{ date('Y-m-d H:i:s', $action['createdTime'] / 1000) }}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
