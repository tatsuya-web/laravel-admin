<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Cockpit;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WpPostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('post')->name('post.')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('.index');
    Route::get('/{post}', [PostController::class, 'detail'])->name('detail')->where('post', '[0-9]+');
});

Route::prefix('wp-post')->name('wp-post.')->group(function() {
    Route::get('/', [WpPostController::class, 'index'])->name('.index');
    Route::get('/{wp_post}', [WpPostController::class, 'detail'])->name('detail')->where('wp_post', '[0-9]+');
});

Route::middleware(['auth', 'verified'])->prefix('cockpit')->name('cockpit.')->group(function () {
    Route::get('/dashboard', Cockpit\DashboardController::class)->name('dashboard');

    Route::prefix('post')->name('post')->group(function() {
        Route::get('/', [Cockpit\PostController::class, 'index'])->name('.index');
        Route::get('/create', [Cockpit\PostController::class, 'create'])->name('.create');
        Route::get('/{post}/edit', [Cockpit\PostController::class, 'edit'])->name('.edit')->where('post', '[0-9]+');
        Route::post('/{post}', [Cockpit\PostController::class, 'update'])->name('.update')->where('post', '[0-9]+');
        Route::delete('/{post}', [Cockpit\PostController::class, 'destroy'])->name('.destroy')->where('post', '[0-9]+');
    });
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
