<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.content.home');
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
