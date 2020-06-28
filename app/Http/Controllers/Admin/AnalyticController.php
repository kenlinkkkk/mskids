<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class AnalyticController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->checkSub('public');
    }

    private function checkSub($type) {
        $public_url = 'http://cskh.mskids.vn/csp-api/v1/main/check_subs/';
        $private_url = 'http://10.54.14.137:8080/csp-api/v1/main/check_subs/';
//        $msisdn = session()->get('_user')['msisdn'];
        $msisdn = '973299154';
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

        dd($data);
        die();
        return $data;
    }
}
