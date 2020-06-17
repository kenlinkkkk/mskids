<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

{{--                <li>--}}
{{--                    <a href="#" class="waves-effect">--}}
{{--                        <i class="bx bx-home-circle"></i><span>Dashboards</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Quản lý</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if (\Illuminate\Support\Facades\Auth::user()->role == 0)
                        <li><a href="{{ route('admin.category.index') }}">Danh mục</a></li>
                        @endif
                        <li><a href="{{ route('admin.page.index') }}">Trang</a></li>

                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>