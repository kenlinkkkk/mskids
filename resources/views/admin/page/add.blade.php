@extends('admin.layout')

@section('title')
    <title>Thêm mới trang</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Thêm mới trang</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item">Quản lý trang</li>
                        <li class="breadcrumb-item active">Thêm mới</li>
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
                    <form method="post" action="{{ route('admin.page.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Short tag</label>
                            <input type="text" class="form-control" name="short_tag">
                        </div>
                        <div class="form-group">
                            <label>Ảnh nền header</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="picture">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Danh mục</label>
                                <select name="category_id" class="custom-select">
                                    <option value="0">Trang mới</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Vị trí hiển thị</label>
                                <select name="position" class="custom-select">
                                    <option value="1">Navbar</option>
                                    <option value="2">Footer</option>
                                </select>
                            </div>
                        </div>

                        <textarea id="elm1" name="content"></textarea>

                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" name="submit" class=" m-2 btn btn-sm btn-success">Thêm mới</button>
                            <a href="{{ route('admin.page.index') }}" class="m-2 btn btn-sm btn-warning">Trở về</a>
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
    <script src="{{ asset('assets/admin/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <!-- Summernote js -->
    {{--    <script src="{{ asset('assets/admin/libs/summernote/summernote-bs4.min.js') }}"></script>--}}

    <!-- init js -->
    <script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
    <script>
        bsCustomFileInput.init();
    </script>
@endsection
