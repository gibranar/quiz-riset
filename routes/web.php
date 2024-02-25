<?php

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
    return view('index');
})->name('index');

Route::get('/landing', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot', function () {
    return view('forgot.send');
})->name('forgot');

Route::get('/forgot/reset', function () {
    return view('forgot.reset');
})->name('reset');

Route::prefix('dashboard')->group(function () {
    Route::get('/user', function () {
        return view('user.dashboard');
    })->name('dashboard.user');
    Route::get('/test', function () {
        return view('user.test');
    })->name('dashboard.test');
});
