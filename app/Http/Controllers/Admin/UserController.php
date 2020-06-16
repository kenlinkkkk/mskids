<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function changePassword(Request $request)
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
}
