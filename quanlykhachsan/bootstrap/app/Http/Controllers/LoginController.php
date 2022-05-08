<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\LoginRequest;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * login
     *
     * @param  \App\Http\Requests\LoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.room.index');
        } else {
            return redirect()->route('login')->withErrors('Tên Đăng Nhập Hoặc Mật Khẩu Sai');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect()->route('login');
    }
}
