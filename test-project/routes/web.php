<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $articles = [
        [
            'title' => 'First Article',
            'content' => 'This is a content'
        ],
        [
            'title' => 'Second Article',
            'content' => 'This is a content'
        ],
        [
            'title' => 'Third Article',
            'content' => 'This is a content'
        ],
        [
            'title' => 'Last Article',
            'content' => 'This is a content'
        ]
    ];
    return view('home', compact('articles'));
});

Route::get('/contact', function () {
    $title = 'This is Contact Page !!!';
    $intro = 'Hello, my name is Nghia';
    $data = compact('title', 'intro');
    return view('contact', $data);
})->name('contact');

Route::get('/user', function() {
    return view('user.index');
});

Route::get('/user/{id}', function($id) {
    return $id;
})->name('user');

Route::get('/home', function() {
    return "<a href='". route('user', 40) ."'>Link</a>";
});

// Route Grouping
Route::group(['prefix' => 'customer'], function() {
    Route::get('/', function() {
        return "<h1>Customer List</h1>";
    });

    Route::get('/create', function() {
        return "<h1>Customer Create</h1>";
    });

    Route::get('/detail', function() {
        return "<h1>Customer Detail</h1>";
    });
});

// Fallback Route
Route::fallback(function() {
    return "404 Error - Route not exist !";
});
