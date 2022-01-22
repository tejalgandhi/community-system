<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('login');
Route::post('login', [HomeController::class, 'post_login'])->name('post.login');
Route::get('logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('home', [HomeController::class, 'home'])->name('user.home');
});
