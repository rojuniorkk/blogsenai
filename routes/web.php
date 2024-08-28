<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    //Website
    Route::get('/',[WebsiteController::class, 'index'])->name('home');

    //Post
    Route::get('/post/criar', [PostController::class, 'index'])->name('post.new');
    Route::post('/post/publish', [PostController::class, 'create'])->name('post.create');
    Route::get('/post/view/{id}', [PostController::class, 'show'])->name('post.show');

    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
