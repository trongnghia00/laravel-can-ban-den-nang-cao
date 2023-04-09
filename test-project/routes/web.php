<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

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
