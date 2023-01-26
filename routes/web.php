<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\COntrollers\DashboardController;

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

Route::resource('', HomeController::class)->only(['index']);
Route::resource('login', LoginController::class)->only(['index', 'store']);
Route::resource('logout', LogoutController::class)->only(['store']);
Route::resource('register', RegisterController::class)->only(['index', 'store']);
Route::resource('dashboard', DashboardController::class)->except(['show'])->middleware('auth');
