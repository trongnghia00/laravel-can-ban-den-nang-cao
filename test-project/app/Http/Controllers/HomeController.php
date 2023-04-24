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


        DB::table('posts')->insert([
            [
                'title' => 'Test Data',
                'description' => 'Mollit cupidatat dolore in officia fugiat exercitation eiusmod adipisicing est. Ad eu laborum ullamco consequat minim consequat. Reprehenderit ipsum veniam aliqua nostrud labore qui incididunt incididunt cupidatat nulla ipsum nostrud fugiat. Excepteur do culpa eiusmod ullamco reprehenderit sit qui voluptate tempor. Anim in exercitation eiusmod fugiat labore. Lorem et velit sit officia do veniam cupidatat. Do in ea dolore officia occaecat minim tempor exercitation ad sint pariatur et qui.',
                'status' => 1,
                'published_at' => date('Y-m-d'),
                'userid' => 1
            ],
            [
                'title' => 'Test Data 2',
                'description' => 'Aute officia reprehenderit in cupidatat sunt aliquip mollit voluptate ea. Ullamco veniam et in sit elit velit reprehenderit non ex est nostrud Lorem voluptate cupidatat. Consequat Lorem amet officia non. Duis elit adipisicing nostrud cillum mollit reprehenderit id aliquip velit anim. Eu excepteur voluptate est ullamco dolore amet aliqua laborum laboris amet. Nostrud sit cillum ut laborum in. Magna duis proident laborum duis aute pariatur enim duis labore qui ipsum.',
                'status' => 1,
                'published_at' => date('Y-m-d'),
                'userid' => 1
            ]
        ]);

        dd('Insert successful.');

        // return view('home', compact('articles'));
    }
}
