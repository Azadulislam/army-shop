<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Auth::routes();

Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/company', [HomeController::class, 'company'])->name('company');


Route::resource('product', ProductController::class);
Route::get('product/{slug}', [ProductController::class, 'show'])->name('product.view');
