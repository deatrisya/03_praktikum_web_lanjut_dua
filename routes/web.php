<?php

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

use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\todaySpecialController;
use App\Http\Controllers\menuController;

Route::get('/',[homeController::class,'home']);
Route::get('today',[todaySpecialController::class,'today']);
Route::get('menu',[menuController::class,'menu']);
Route::get('contact',[contactController::class,'contact']);

