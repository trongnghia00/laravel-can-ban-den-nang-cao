<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MyPost;
use App\Models\Tag;
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
        $post = MyPost::first();
        $tag = Tag::first();
        $post->tags()->attach($tag);

        // return view('home', compact('posts'));
    }
}
