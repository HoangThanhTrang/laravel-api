<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::where('email',$request->email)->first();// nếu chỉ cần lấy 1 row từ bảng dữ liệu , first() sẽ trả về một đối tượng đơn
        if(!$user || !Hash::check($request->password,$user->password)){
            throw ValidationException::withMessages([
                'email'=>['thông tin đăng nhập bạn đã nhập không chính xác']
            ]);
        }
    }
}
