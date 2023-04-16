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
        ]);

        return $request;
    }
}
