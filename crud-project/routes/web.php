<?php

use App\Http\Controllers\PostController;
use App\Mail\TestMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
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

Route::get('notsupport', function() {
    return view('notsupport');
})->name('notsupport');

Route::get('comp', function () {
    $posts = Post::all();
    return view('comp', compact('posts'));
});

Route::get('send-email', function () {
    // Mail::raw('Hello World !!! This is a test mail.', function($message) {
    //     $message->to('...')->subject('Test Email');
    // });

    Mail::send(new TestMail);

    dd('Success');
});

Route::get('get-session', function (Request $request) {
    // $data = session()->all();
    $data = $request->session()->all();

    // $data = $request->session()->get('_token');

    dd($data);
});

Route::get('store-session', function(Request $request){
    $request->session()->put('user_id', 123);
    $request->session()->put([
        'logged_in' => true,
        'user_name' => 'Nghia'
    ]);

    session(['user_ip' => '192.168.1.1']);

    return redirect('get-session');
});

Route::get('del-session', function (Request $request) {
    // $request->session()->forget(['user_ip', 'logged_in']);
    // session()->forget(['user_name']);

    $request->session()->flush();

    return redirect('get-session');
});

Route::get('flash-session', function(Request $request) {
    session()->flash('success', 'Thao tác thực hiện thành công !!!');

    return redirect('get-session');
});

Route::get('forget-cache', function() {
    Cache::forget('posts');
});

Route::get('posts', [PostController::class, 'index'])->name('posts');

Route::get('/create', [PostController::class, 'create'])->name('create');
Route::get('trash', [PostController::class, 'trashed'])->name('trashed');
Route::get('{id}/restore', [PostController::class, 'restore'])->name('restore');
Route::delete('{id}/delete', [PostController::class, 'forceDelete'])->name('forceDelete');

Route::get('{id}/edit', [PostController::class, 'edit'])->name('edit');
Route::post('{id}', [PostController::class, 'update'])->name('update');
Route::get('{id}', [PostController::class, 'show'])->name('show');
Route::delete('{id}', [PostController::class, 'destroy'])->name('destroy');


Route::get('/', [PostController::class, 'index'])->name('index');
Route::post('/', [PostController::class, 'store'])->name('store');

