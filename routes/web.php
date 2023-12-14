<?php

use App\Http\Controllers\PathController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\SessionController;

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

Route::controller(ViewController::class)->group(function () {
    Route::get('/', 'view')->name('signin');
    Route::get('home', 'view')->name('home')->middleware('auth');
    Route::get('login', 'view')->name('login');
});

Route::controller(SessionController::class)->group(function () {
    Route::post('logingin', 'login');
    Route::get('logout', 'logout')->middleware('auth');
});

Route::post('register', [RegisterController::class, 'register']);
Route::get('image/{imageName}', [PathController::class, 'imagePath'])->name('image');
