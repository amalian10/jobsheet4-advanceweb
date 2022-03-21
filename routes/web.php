<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ItemController;
use App\http\Controllers\HowitworksController;

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

Route::get('/', [HomeController::class, 'about']);

Route::get('/cooming', [HomeController::class, 'cooming']);

Route::get('/howitworks', [HomeController::class, 'howitworks']);

Route::get('/index', [HomeController::class, 'index']);

Route::get('/pricing', [HomeController::class, 'pricing']);

Route::get('/product', [HomeController::class, 'product']);

Route::get('/profile', [HomeController::class, 'profile']);