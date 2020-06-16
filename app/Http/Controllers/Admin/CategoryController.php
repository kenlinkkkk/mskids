<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\Admin\CategoryEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class CategoryController extends Controller
{
    public function __construct(CategoryEloquentRepository $categoryEloquentRepository)
    {
        $this->categoryEloquentRepository = $categoryEloquentRepository;
    }

    public function index()
    {
        if (Auth::user()->role == 0) {
            $categories = $this->categoryEloquentRepository->getAll();

            $data = compact(
                'categories'
            );
        } else {
            $categories = Category::where('status', '=', 1)->get();

            $data = compact(
                'categories'
            );
        }

        return view('admin.category.index', $data);
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function edit($category_id)
    {
        $category = Category::where('id', '=', $category_id)->first();

        $data = compact(
            'category'
        );

        return view('admin.category.edit', $data);
    }

    public function create(Request $request)
    {
        $data = $request->except('_token');
        $short_tag = sluggify($data['name']);
        if ($data['short_tag'] == null) {
            $data['short_tag'] = $short_tag;
        }

        try {
            $result = $this->categoryEloquentRepository->create($data);

            if ($result) {
                $request->session()->flash('success', 'Thêm thành công');
            } else {
                $request->session()->flash('error', 'Thêm mới thất bại');
            }

            return redirect(route('admin.category.index'));
        } catch (Throwable $exception) {
            report($exception);
        }
    }

    public function update(Request $request, $category_id)
    {
        $data = $request->except('_token');

        try {
            $result = $this->categoryEloquentRepository->update($category_id, $data);

            if ($result) {
                $request->session()->flash('success', 'Cập nhật thành công');
            } else {
                $request->session()->flash('error', 'Cập nhật thất bại');
            }

            return redirect(route('admin.category.index'));
        } catch (Throwable $exception) {
            report($exception);
        }
    }

    public function delete(Request $request, $category_id)
    {
        $data = [
            'status' => 0
        ];

        $result = $this->categoryEloquentRepository->update($category_id, $data);

        if ($result) {
            $request->session()->flash('success', 'Xóa thành công');
        } else {
            $request->session()->flash('error', 'Xóa thất bại');
        }

        return redirect()->back();
    }
}
