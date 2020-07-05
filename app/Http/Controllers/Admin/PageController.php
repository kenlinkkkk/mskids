<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Repositories\Admin\CategoryEloquentRepository;
use App\Repositories\Admin\PageEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\Rule\AnyInvokedCount;
use Throwable;

class PageController extends Controller
{
    public function __construct(PageEloquentRepository $pageEloquentRepository, CategoryEloquentRepository $categoryEloquentRepository)
    {
        $this->pageEloquentRepository = $pageEloquentRepository;
        $this->categoryEloquentRepository = $categoryEloquentRepository;
    }

    public function index()
    {
        if (Auth::user()->role == 0) {
            $pages = $this->pageEloquentRepository->edge('category');

            $data = compact(
                'pages'
            );
        } else {
            $pages = Page::with('category')->where('status', '=', 1)->get();

            $data = compact(
                'pages'
            );
        }


        return view('admin.page.index', $data);
    }

    public function add()
    {
        $categories = $this->categoryEloquentRepository->getAll();

        $data = compact(
            'categories'
        );

        return view('admin.page.add', $data);
    }

    public function edit($page_id)
    {
        $page = $this->pageEloquentRepository->find($page_id);
        $categories = $this->categoryEloquentRepository->getAll();

        $data = compact(
            'page',
            'categories'
        );

        return view('admin.page.edit', $data);
    }

    public function create(Request $request)
    {
        $data = $request->except('_token');
        if ($data['short_tag'] == null) {
            $data['short_tag'] = sluggify($data['name']);
        }

        if ($request->hasFile('picture')) {
            $picture = $request->picture;
            $filePath = 'uploads/home';
            $filePath = str_replace('\\', '/', $filePath);

            $picture_name = $picture->getClientOriginalName();
            $picture->move($filePath, $picture_name);
            $data['picture'] = $filePath.'/'.$picture_name;
        }

        try {
            $result = $this->pageEloquentRepository->create($data);

            if ($result) {
                $request->session()->flash('success', 'Thêm thành công');
            } else {
                $request->session()->flash('error', 'Thêm mới thất bại');
            }

            return redirect(route('admin.page.index'));
        } catch (Throwable $exception) {
            report($exception);
        }
    }

    public function update(Request $request, $page_id)
    {
        $data = $request->except('_token');

        if ($request->hasFile('picture')) {
            $picture = $request->picture;
            $filePath = 'uploads/home';
            $filePath = str_replace('\\', '/', $filePath);

            $picture_name = $picture->getClientOriginalName();
            $picture->move($filePath, $picture_name);
            $data['picture'] = $filePath.'/'.$picture_name;
        }

        try {
            $result = $this->pageEloquentRepository->update($page_id, $data);

            if ($result) {
                $request->session()->flash('success', 'Cập nhật thành công');
            } else {
                $request->session()->flash('error', 'Cập nhật thất bại');
            }

            return redirect(route('admin.page.index'));
        } catch (Throwable $exception) {
            report($exception);
        }
    }

    public function delete(Request $request, $page_id)
    {
        $data = [
            'status' => 0
        ];

        $result = $this->pageEloquentRepository->update($page_id, $data);

        if ($result) {
            $request->session()->flash('success', 'Xóa thành công');
        } else {
            $request->session()->flash('error', 'Xóa thất bại');
        }

        return redirect()->back();
    }
}
