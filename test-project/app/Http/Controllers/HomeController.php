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
        DB::table('posts')->where('id', 54)->update([
            'title' => 'New title',
            'description' => 'This is a updated description.'
        ]);

        dd('Update successful.');

        // return view('home', compact('articles'));
    }
}
