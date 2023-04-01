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
    return view('welcome');
});

Route::get('/contact', function () {
    return "<h1>Contact Page</h1>";
})->name('contact');

Route::get('/user', function() {
    return "<h1>User Detail Page</h1>";
});

Route::get('/user/{id}', function($id) {
    return $id;
})->name('user');

Route::get('/home', function() {
    return "<a href='". route('user', 40) ."'>Link</a>";
});