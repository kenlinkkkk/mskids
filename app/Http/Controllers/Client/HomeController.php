<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Repositories\Admin\CategoryEloquentRepository;
use App\Repositories\Admin\PageEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    const MOBIFONE_KEY = 'GuUgo9rJiCROAYc8';
    const MOBIFONE_CONFIRM = 'http://free.mobifone.vn/confirm';
    const SP = '9337';

    public function __construct(PageEloquentRepository $pageEloquentRepository, CategoryEloquentRepository $categoryEloquentRepository)
    {
        $this->categoryEloquentRepository = $categoryEloquentRepository;
        $this->pageEloquentRepository = $pageEloquentRepository;
    }

    public function index()
    {
        $nav_item = Page::where('position', '=', 1)->where('status', '=', 1)->get();
        $footer_item = Page::where('position', '=', 2)->where('status', '=', 1)->get();
        $package = $this->checkSub('private');

        $data = compact(
            'package',
            'nav_item',
            'footer_item'
        );

        return view('client.content.home', $data);
    }

    public function showRegPage()
    {
        $package = $this->checkSub('private');
        $nav_item = Page::where('position', '=', 1)->where('status', '=', 1)->get();
        $footer_item = Page::where('position', '=', 2)->where('status', '=', 1)->get();

        $data = compact(
            'package',
            'nav_item',
            'footer_item'
        );

        return view('client.content.package',$data);
    }

    public function viewPage(Request $request, $page)
    {
        $pkg = ['s3', 's5', 'm3', 'm5'];
        $pkg_info = [
            's3' => ['30.000', '3 thiết bị', '1 tháng'],
            's5' => ['40.000', '5 thiết bị', '1 tháng'],
            'm3' => ['300.000', '3 thiết bị', '1 năm'],
            'm5' => ['400.000', '5 thiết bị', '1 năm'],
        ];
        if (in_array(strtolower($page), $pkg)) {
            $nav_item = Page::where('position', '=', 1)->where('status', '=', 1)->get();
            $footer_item = Page::where('position', '=', 2)->where('status', '=', 1)->get();

            $data = compact(
                'page',
                'nav_item',
                'footer_item',
                'pkg_info'
            );

            return view('client.content.reg', $data);
        } else {
            $page = Page::where('short_tag', '=', $page)->where('status', '=', 1)->first();
            $nav_item = Page::where('position', '=', 1)->where('status', '=', 1)->get();
            $footer_item = Page::where('position', '=', 2)->where('status', '=', 1)->get();

            $data = compact(
                'page',
                'nav_item',
                'footer_item'
            );

            return view('client.content.page', $data);
        }
    }

    public function showHeader(Request $request) {
        dd($request->header());
    }

    public function redirectUrl(Request $request)
    {
        Log::info('LOG::redirectUrl::MSISDN');
        $content = html_entity_decode($request->get('link'));

        if (empty($content)) {
            session()->put('_user', ['msisdn' => 'empty']);
            Log::info('LOG::redirectUrl::session-msisdn: '. session()->get('_user')['msisdn']);
        } else {
            session()->put('_user', ['msisdn' => aes128Decrypt('GuUgo9rJiCROAYc8', $content)]);
            Log::info('LOG::redirectUrl::session-msisdn: '. session()->get('_user')['msisdn']);
        }

        return Redirect::route('home.index');
    }

    public function regPackage(Request $request)
    {
        Log::info('LOG::registerPackage::BEGIN');
        Log::info('LOG::registerPackage::MSISDN::'. session()->get('_user')['msisdn']);
        $data = $request->except('_token');

        $trans_id = date('ymdhis');
        $package_code = $data['package'];
        $command_code = 'DK '. $package_code;
        $back_url = route('home.index');

        $data_raw = $trans_id .'&'. $command_code .'&'. $package_code .'&'. $back_url;
        Log::info('LOG::registerPackage::data-data_raw:'. $data_raw);

        $url_raw = self::MOBIFONE_CONFIRM .'?sp=' . self::SP.'&link=' . $data_raw;
        Log::info('LOG::registerPackage::data-url_raw:'. $url_raw);

        $url_encrypt = self::MOBIFONE_CONFIRM .'?sp=' .self::SP .'&link='. aes128Encrypt(self::MOBIFONE_KEY, $data_raw);
        Log::info('LOG::registerPackage::data-url_encrypt:'. $url_encrypt);
        Log::info('LOG::registerPackage::END');

        return Redirect::away($url_encrypt);

    }

    public function showProfile()
    {
        $nav_item = Page::where('position', '=', 1)->where('status', '=', 1)->get();
        $footer_item = Page::where('position', '=', 2)->where('status', '=', 1)->get();
        $data = compact(
            'nav_item',
            'footer_item'
        );
        return view('client.content.profile', $data);
    }

    private function checkSub($type) {
        $public_url = 'http://cskh.mskids.vn/csp-api/v1/main/check_subs/';
        $private_url = 'http://10.54.14.137:8080/csp-api/v1/main/check_subs/';
        $msisdn = session()->get('_user')['msisdn'];
        $ch = curl_init();
        $type == 'public'? $url = $public_url : $url = $private_url;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"p=". $msisdn);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec ($ch);

        $data = json_decode($response, true);
        curl_close ($ch);

        // further processing ....
        return $data;
    }
}
