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
        // $post = MyPost::create([
        //     'title' => 'This is from mass',
        //     'description' => 'This is description from mass',
        //     'status' => 1,
        //     'published_at' => date('Y-m-d'),
        //     'userid' => 1,
        //     'category_id' => 1
        // ]);

        $post = MyPost::where('status', 1)->update([
            'status' => 0
        ]);

        dd('Success.');

        // return view('home', compact('articles'));
    }
}
