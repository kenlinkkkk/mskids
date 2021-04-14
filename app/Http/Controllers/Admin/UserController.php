<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PasswordRequest;
use App\Models\User;
use App\Repositories\Admin\UserEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(UserEloquentRepository $userEloquentRepository)
    {
        $this->userEloquentRepository = $userEloquentRepository;
    }

    public function index() {
        $user = Auth::user();

        $data = compact(
            'user'
        );

        return view('admin.user.info', $data);
    }

    public function changePassword(PasswordRequest $request)
    {
        $user = Auth::user();

        $data = $request->except('_token');

        if (password_verify($data['password_old'], $user->password)) {
            if ($data['password_new'] == $data['password_confirm']) {
                try {
                    $result = User::find($user->id)->update(['password' => Hash::make($data['password_new'])]);

                    Auth::logout();
                    return redirect(route('login'));
                } catch (Throwable $exception) {
                    report($exception);
                }
            } else {
                $request->session()->flash('error', 'Mật khẩu mới không trùng nhau');
                return redirect(route('admin.profile'));
            }
        } else {
            $request->session()->flash('error', 'Mật khẩu hiện tại không chính xác');
            return redirect(route('admin.profile'));
        }
    }

    public function upload(Request $request)
    {
        if ($request->file('file')) {
            $file=$request->file('file');
            $path= url('/uploads/post').'/'.$file->getClientOriginalName();
            $imgpath=$file->move(public_path('/uploads/post/'),$file->getClientOriginalName());

            $fileNameToStore= $path;

            return json_encode(['location' => $fileNameToStore]);
        } else {
            $data = $request->except('_token');
            $contentBase64 = $data['base64Data'];
            $content = base64_decode($contentBase64, true);
            $fp = file_put_contents(public_path('/uploads/post/'. $data['title']), $content);
            return response()->json('/uploads/post/'. $data['title']);
        }
    }

    public function decode_chunk( $data ) {
        $data = explode( ';base64,', $data );

        if ( ! is_array( $data ) || ! isset( $data[1] ) ) {
            return false;
        }

        $data = base64_decode( $data[1] );
        if ( ! $data ) {
            return false;
        }

        return $data;
    }
}
