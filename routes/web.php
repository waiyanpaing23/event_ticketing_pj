<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('admin/dashboard', function() {
//     return view('admin.dashboard');
// })->name('admin');

// Route::get('home', function() {
//     return view('user.home');
// })->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('home', [UserController::class, 'index'])->name('home')->middleware('user');

    Route::prefix('admin')->group( function() {
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin')->middleware('admin');
    });

    Route::prefix('organizer')->group( function() {
        Route::get('home', [OrganizerController::class, 'index'])->name('organizer');
    });
});

require __DIR__.'/auth.php';
