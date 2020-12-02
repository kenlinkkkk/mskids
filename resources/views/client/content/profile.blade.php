@extends('client.index')
@section('title')
    <title>Cập nhật thông tin cá nhân</title>
@endsection

@section('content')
    <section class="page-hero-section division" id=pricing-page>
        <div class=container>
            <div class=row>
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="hero-txt text-center white-color">
                        <h3 class=h3-xl>Thông tin cá nhân</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-60 pricing-page-section" id=pricing-2>
        <div class=container>
            <div class=row>
                <div class="col-lg-10 offset-lg-1 section-title">
                    <h3 class=h3-lg>Thông tin cá nhân</h3>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input class="form-control" type="text" name="name" placeholder="Nguyễn Văn A">
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Số điện thoại</label>
                            <input class="form-control" type="text" name="phoneNumber" maxlength="10" placeholder="0902...">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                        <button type="submit" class="btn btn-success" style="background-color: #28a745">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
