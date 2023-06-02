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

Route::get('{id}/edit', [PostController::class, 'edit'])->name('edit');
Route::post('{id}', [PostController::class, 'update'])->name('update');
Route::resource('/', PostController::class);

/**
 * CRUD
 * C = Create
 * R = Read
 * U = Update
 * D = Delete
 */
