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
        $post = MyPost::where('id', 60)->first();
        $post->title = 'New title for post 60';
        $post->description = 'Laboris cupidatat mollit anim adipisicing ipsum cupidatat proident elit.';
        $post->save();

        dd('Success.');

        // return view('home', compact('articles'));
    }
}
