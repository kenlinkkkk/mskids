@extends('admin.layout')

@section('title')
    <title>Sửa trang</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Sửa trang</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item">Quản lý trang</li>
                        <li class="breadcrumb-item active">Sửa</li>
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
                    <form method="post" action="{{ route('admin.page.update', [$page->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" name="name" value="{{ $page->name }}">
                        </div>
                        <div class="form-group">
                            <label>Short tag</label>
                            <input type="text" class="form-control" name="short_tag" value="{{ $page->short_tag }}" readonly disabled>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Danh mục</label>
                                <select name="category_id" class="custom-select">
                                    <option value="0" {{ $page->category_id == 0? 'selected' : '' }}>Trang mới</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $page->category_id == $category->id? 'selected' : '' }} >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Vị trí hiển thị</label>
                                <select name="position" class="custom-select">
                                    <option value="1" {{ $page->position == 1? 'selected' : '' }}>Navbar</option>
                                    <option value="2" {{ $page->position == 2? 'selected' : '' }}>Footer</option>
                                </select>
                            </div>
                        </div>
                        <textarea id="elm1" name="content">{!! $page->content !!}</textarea>

                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" name="submit" class=" m-2 btn btn-sm btn-success">Cập nhật</button>
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
    <!-- init js -->
    <script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
@endsection