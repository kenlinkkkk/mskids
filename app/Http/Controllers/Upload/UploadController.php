<?php

namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use Egulias\EmailValidator\Exception\AtextAfterCFWS;
use Illuminate\Http\Request;
use Throwable;

class UploadController extends Controller
{
    public function __construct()
    {

    }

    public function uploadImage(Request $request)
    {
        $data = $request->except('_token');
        if (!empty($data['file'])) {
            $file = $data['file'];
            try {
                $file->move(public_path('upload'), $file->getClientOriginalName());
            } catch (Throwable $exception) {
                return $exception;
            }

            return $data['file']->getClientOriginalName();
        } else {
            return response()->json([
                'code' => 400,
            ]);
        }
    }

    public function test(Request $request)
    {
        $this->checkSub('public');
    }

    private function checkSub($type) {
        $public_url = 'http://cskh.mskids.vn/csp-api/v1/main/check_subs/';
        $private_url = 'http://10.54.14.137:8080/csp-api/v1/main/check_subs/';
//        $msisdn = session()->get('_user')['msisdn'];
        $msisdn = '909162137';
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
