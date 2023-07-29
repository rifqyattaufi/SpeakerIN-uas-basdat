<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpeakerController;
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

Route::name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/ban', function () {
    return "ban";
})->name('ban');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::middleware(['auth'])->group(function () {

    Route::name('admin.')->prefix('admin')->middleware(['role:2'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });

    Route::name('speaker.')->prefix('speaker')->middleware(['role:1'])->group(function () {
        Route::get('/', [SpeakerController::class, 'dashboard'])->name('dashboard');

        Route::get('/dashboard', [SpeakerController::class, 'dashboard']);

        Route::get('register', [UserController::class, 'SpeakerRegister'])->name('register');
    });
});
