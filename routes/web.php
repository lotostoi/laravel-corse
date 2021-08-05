<?php

use App\Http\Controllers\NewsCategorysController as NCC;
use App\Http\Controllers\NewsController as NC;
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
    return view('home/index');
});

Route::get('/hello', function () {
    return "Hello, World";
});

Route::get('/home', function () {
    return "Home page";
});

Route::group(['prefix' => '/news'], function () {
    Route::get('/', [NC::class, 'index']);
    Route::get('/categories', [NCC::class, 'index'])->name('categories');
    Route::get('/categories/{id}', [NC::class, 'showCategoryById'])->name('categoriesId');
    Route::get('/{id}', [NC::class, 'showNewById'])->name('newId');
});
