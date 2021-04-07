@extends('client.index')
@section('title')
    <title>ứng dụng</title>
@endsection

@section('content')
    <section class="page-hero-section division" id="download" style="background-image: url('http://dev.template.vn/assets/client/images/newsletter-1.jpg')">
        <div class=container>
            <div class=row>
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="hero-txt text-center white-color">
                        <h3 class=h3-lg>Chuyển sang trang download ứng dụng.....</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        setTimeout(function () {
            if (navigator.userAgent.indexOf("Android") !== -1) {
                window.location.href = "https://play.google.com/store/apps/details?id=com.mskids.me";
            } else if (navigator.userAgent.indexOf("like Mac") !== -1) {
                window.location.href = "https://apps.apple.com/us/app/mobifone-global-safekids/id1533642275";
            } else if (navigator.userAgent.indexOf("Win") !== -1) {
                window.location.href = "https://play.google.com/store/apps/details?id=com.mskids.me";
            }
        }, 3000)
    })
</script>
@endsection
