<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $request->validate([
            'username' => ['required', 'alpha_num', 'min:6', 'max:10'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ], [
            'username.required' => 'Bạn phải nhập username !!!',
            'username.alpha_num' => 'Bạn chỉ được sử dụng chữ cái và số cho username',
            'username.min' => 'Username ít nhất 6 ký tự !!'
        ]);

        return $request;
    }
}
