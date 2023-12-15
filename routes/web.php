<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\PodcastController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/discographies', [MusicController::class, 'index']);
Route::get('/podcasts', [PodcastController::class, 'index']);
Route::get('/webstore', [StoreController::class, 'index']);