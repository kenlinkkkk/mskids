<footer id="footer-2" class="wide-40 footer division">
    <div class=container>
        <div class=row>
            <div class="col-md-10 col-lg-4">
                <div class="footer-info mb-40">
                    <img src="{{ asset('assets/client/images/logo-sk.png') }}" width="175" alt=footer-logo>
                    <a href="#"><img src="{{ asset('assets/client/images/dathongbao.png') }}" width="117" alt=footer-logo></a>
                </div>
            </div>
            <div class="col-md-10 col-lg-8">
                <div class="footer-links mb-40">
                    <h5 class=h5-sm>Thông tin công ty</h5>
                    <ul class=clearfix>
                        <li><i class="fas fa-map-marker-alt"></i> <strong>Tòa nhà Ford Thăng Long</strong><br />105 - đường Láng Hạ, quận Đống Đa, Hà Nội.</li>
                        <li>
                            <i class="fas fa-phone-volume"></i><strong> Điện thoại:</strong>
                            <a href="tel:+02435773333">024.3577 3333</a><br />
                        </li>
                        <li>
                            <i class="fas fa-newspaper"></i><strong> Mã số doanh nghiệp:</strong> 0102577251 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày 24/12/2007 - Đăng ký thay đổi lần thứ 8, ngày 26 tháng 11 năm 2018
                        </li>
                        <li>
                            <i class="fas fa-newspaper"></i><strong> Giấy phép: </strong> ICP số 2959/GP-TTĐT do Sở Thông tin và Truyền thông Hà Nội cấp ngày 30/10/2014
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=bottom-footer>
            <div class=row>
                <div class="col-md-8 col-sm-12">
                    <p class=footer-copyright>&copy; 2020 <span>Safe Kids</span>. All Rights Reserved</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    @if ($footer_item->count() > 0)
                        @foreach($footer_item as $item)
                            <a class="nav-link text-left" href="{{ route('viewPage', [$item->short_tag]) }}">{{ $item->name }}</a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>