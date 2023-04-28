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
        $post = new MyPost();

        $post->title = 'Post 64';
        $post->description = 'Cillum laboris aliqua non duis eiusmod adipisicing culpa enim pariatur eiusmod incididunt.';
        $post->status = 1;
        $post->published_at = date('Y-m-d');
        $post->userid = 1;
        $post->category_id = 1;

        $post->save();

        dd('Success.');

        // return view('home', compact('articles'));
    }
}
