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
        echo public_path('upload');
        die();
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
        $data = $request->except('_token');

        dd($data);
    }
}
