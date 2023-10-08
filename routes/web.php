<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LaptopController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/page', [IndexController::class, 'page']);

// Route::resource('laptop', LaptopController::class) ->only(['index', 'show', 'create', 'store']);
// Route::resource('laptop', LaptopController::class) ->except(['destroy']);
Route::resource('laptop', LaptopController::class);
