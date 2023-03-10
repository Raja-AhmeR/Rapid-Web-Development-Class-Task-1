<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InnerPageController;
use App\Http\Controllers\Frontend\PortfolioDetailsController;

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

// Route::get('/', [InnerPageController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [PortfolioDetailsController::class, 'index']);
