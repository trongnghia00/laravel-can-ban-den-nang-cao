<?php

use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
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
// Route::resource('/', PostController::class);

/**
 * CRUD
 * C = Create
 * R = Read
 * U = Update
 * D = Delete
 */
