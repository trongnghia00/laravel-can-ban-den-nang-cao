<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ImageController::class, 'index'])->name('image.index');
Route::get('/image/{image}', [ImageController::class, 'show'])->name('image.show');
Route::get('/image', [ImageController::class, 'create'])->name('image.create');
Route::post('/image', [ImageController::class, 'store'])->name('image.store');
Route::get('/image/{image}/edit', [ImageController::class, 'edit'])->name('image.edit');
Route::put('/image/{image}', [ImageController::class, 'update'])->name('image.update');
Route::delete('/image/{image}', [ImageController::class, 'destroy'])->name('image.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
