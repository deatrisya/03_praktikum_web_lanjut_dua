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

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodaySpecialController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodMenuController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('today',[TodaySpecialController::class,'today'])->name('today');
Route::get('menu',[MenuController::class,'menu'])->name('menu');
Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::get('foodmenu',[FoodMenuController::class,'foodMenu'])->name('foodmenu');

