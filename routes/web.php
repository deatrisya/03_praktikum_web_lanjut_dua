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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::prefix('product')->group(function () {
    Route::get('today-special', function () {
        return view('today');
    })->name('today');
});

Route::get('menu', function () {
    return view('menu');
})->name('menu');

Route::resource('contact', contactController::class);
