<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
//use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function __invoke(Request $request)
    {
        return MyPost::all();
        // return MyPost::onlyTrashed()->get();

        // MyPost::withTrashed()->find(64)->forceDelete();
        // dd('Success.');

        // return view('home', compact('articles'));
    }
}
