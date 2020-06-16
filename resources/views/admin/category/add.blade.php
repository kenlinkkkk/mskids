@extends('admin.layout')

@section('title')
    <title>Thêm mới danh mục</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Thêm mới danh mục</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item">Quản lý danh mục</li>
                        <li class="breadcrumb-item active">Thêm mới danh mục</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Thông tin danh mục</h4>

                    <form method="post" action="{{ route('admin.category.create') }}">
                        @csrf
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" class="form-control" name="name" required="required">
                        </div>
                        <div class="form-group">
                            <label>Short tag</label>
                            <input type="text" class="form-control" name="short_tag">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="7" name="description"></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" name="submit" class=" m-2 btn btn-sm btn-success">Thêm mới</button>
                            <a href="{{ route('admin.category.index') }}" class="m-2 btn btn-sm btn-warning">Trở về</a>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
    <!--tinymce js-->
    <script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- Summernote js -->
    {{--    <script src="{{ asset('assets/admin/libs/summernote/summernote-bs4.min.js') }}"></script>--}}

    <!-- init js -->
    <script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
@endsection