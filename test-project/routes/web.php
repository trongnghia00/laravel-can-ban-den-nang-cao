<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
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

Route::get('/', HomeController::class);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/user', function() {
    return view('user.index');
});

Route::resource('blog', BlogController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::get('/upload', [UploadController::class, 'index'])->name('upload');

Route::post('/upload', [UploadController::class, 'handleUpload'])->name('upload.submit');

Route::get('/success', function() {
    return '<h1>Upload Successfully</h1>';
})->name('success');
