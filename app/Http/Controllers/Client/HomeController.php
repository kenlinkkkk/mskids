<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\Admin\CategoryEloquentRepository;
use App\Repositories\Admin\PageEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function __construct(PageEloquentRepository $pageEloquentRepository, CategoryEloquentRepository $categoryEloquentRepository)
    {
        $this->categoryEloquentRepository = $categoryEloquentRepository;
        $this->pageEloquentRepository = $pageEloquentRepository;
    }

    public function index()
    {
        return view('client.content.home');
    }

    public function viewPage(Request $request, $category_tag)
    {

        $cates = Category::where('short_tag', '=', $category_tag)->with('pages')->get();

        $data = compact(
            'cates'
        );

        dd($data);
    }

    public function showHeader(Request $request) {
        dd($request->header());
    }

    public function redirectUrl(Request $request)
    {
        Log::info('LOG::redirectUrl::MSISDN');
        $content = $request->get('link');

        if (empty($content)) {
            session()->put('_user', ['msisdn' => 'empty']);
            Log::info('LOG::redirectUrl::session-msisdn: '. session()->get('_user')['msisdn']);
            return Redirect::route('home.index');
        } else {
            session()->put('_user', ['msisdn' => aes128Decrypt('km12tXwuXaJ8Hagh', $content)]);
            Log::info('LOG::redirectUrl::session-msisdn: '. session()->get('_user')['msisdn']);
            return Redirect::route('home.index');
        }
    }
}
