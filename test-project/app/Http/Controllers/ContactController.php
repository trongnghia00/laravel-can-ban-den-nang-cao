<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title = 'This is Contact Page !!!';
        $intro = 'Hello, my name is Nghia';
        $data = compact('title', 'intro');
        return view('contact', $data);
    }
}
