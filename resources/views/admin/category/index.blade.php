@extends('admin.layout')

@section('title')
    <title>Thêm mới danh mục</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Danh mục</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Quản lý danh mục</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <div class="d-flex justify-content-between">
                        <p>Danh mục</p>
                        <a class="btn btn-sm btn-success mb-2" href="{{ route('admin.category.add') }}">Thêm mới</a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Short tag</th>
                            <th>Trạng thái</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->short_tag }}</td>
                                @if ($category->status == 1)
                                    <td><span class="badge badge-pill badge-soft-success font-size-12">Active</span></td>
                                @else
                                    <td><span class="badge badge-pill badge-soft-danger font-size-12">Deactive</span></td>
                                @endif
                                <td class="text-right">
                                    <form id="form-{{ $category->id }}" method="post" action="{{ route('admin.category.delete', [$category->id]) }}">
                                        @csrf
                                        <a href="{{ route('admin.category.edit', [$category->id]) }}" class="btn btn-success btn-sm">Sửa</a>
                                        <button type="submit" categoryId="{{ $category->id }}" class="btn btn-danger btn-sm btn-delete">Deactive</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("body").on("click", ".btn-delete", function(e){
            e.preventDefault();
            let id = $(this).attr('categoryId');
            swal.fire({
                title: "Bạn có chắc không?",
                text: "Bạn sẽ không thể khôi phục lại thông tin này khi đã xóa!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Đúng! Tôi chắc chắn!",
                cancelButtonText: "Hủy",
                closeOnConfirm: false
            }).then((result) => {
                if (result.value) {
                    $('#form-' + id).submit();
                }
            });
        });
    </script>
@endsection