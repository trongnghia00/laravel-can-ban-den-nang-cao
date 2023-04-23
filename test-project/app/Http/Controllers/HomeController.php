<?php

namespace App\Http\Controllers;

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
        // $articles = [
        //     [
        //         'title' => 'First Article',
        //         'content' => 'This is a content',
        //         'published' => 1
        //     ],
        //     [
        //         'title' => 'Second Article',
        //         'content' => 'This is a content',
        //         'published' => 1
        //     ],
        //     [
        //         'title' => 'Third Article',
        //         'content' => 'This is a content',
        //         'published' => 0
        //     ],
        //     [
        //         'title' => 'Last Article',
        //         'content' => 'This is a content',
        //         'published' => 1
        //     ]
        // ];


        return DB::table('posts')
                ->where('id', 10)
                ->get();

        // return view('home', compact('articles'));
    }
}
