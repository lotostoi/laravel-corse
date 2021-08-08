<?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\NewsCategorysController as NCC;
use App\Http\Controllers\NewsController as NC;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminMain;
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
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminMain::class, 'index']);
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', [AboutUs::class, 'index']);
    Route::get('/categories', [NCC::class, 'index'])->name('categories');
    Route::get('/categories/{id}', [NC::class, 'showCategoryById'])->name('categoriesId');
    Route::get('/{id}', [NC::class, 'showNewById'])->name('newId');
});
