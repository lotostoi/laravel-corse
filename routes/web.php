<?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\NewsCategorysController as NCC;
use App\Http\Controllers\NewsController as NC;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminMain;
use App\Http\Controllers\admin\AdminNews;
use App\Http\Controllers\admin\AdminCategories;
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
    Route::get('/', [AdminMain::class, 'index'])->name('main-admin');
    Route::get('/news', [AdminNews::class, 'index'])->name('admin-news');
    Route::get('/add-news', [AdminNews::class, 'create'])->name('admin-add-news');
    Route::get('/categories', [AdminCategories::class, 'index'])->name('admin-categories');
    Route::get('/add-categories', [AdminCategories::class, 'create'])->name('admin-add-category');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', [AboutUs::class, 'index']);
    Route::get('/categories', [NCC::class, 'index'])->name('categories');
    Route::get('/categories/{id}', [NC::class, 'showCategoryById'])->name('categoriesId');
    Route::get('/{id}', [NC::class, 'showNewById'])->name('newId');
});
