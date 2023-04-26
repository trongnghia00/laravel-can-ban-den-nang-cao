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
        /**
         * 1. Lấy toàn bộ dữ liệu
         * 2. Lấy 1 dữ liệu đơn
         * 3. Lấy 1 dữ liệu hoặc phát sinh lỗi
         */

        // return $post = MyPost::findOrFail(60);

        $posts = MyPost::all();
        foreach ($posts as $post) {
            echo $post->title . "<br />";
        }

        // return view('home', compact('articles'));
    }
}
