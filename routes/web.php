<?php
use App\Http\Controllers\app\AboutUs;
use App\Http\Controllers\admin\AdminCategories;
use App\Http\Controllers\admin\AdminMain;
use App\Http\Controllers\admin\AdminNews;
use App\Http\Controllers\admin\AdminUsers;
use App\Http\Controllers\app\AppReviews;
use App\Http\Controllers\app\NewsCategorysController as NCC;
use App\Http\Controllers\app\NewsController as NC;
use App\Http\Controllers\app\PersonArea;
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

Route::group(['prefix' => '/admin'], function () {

    Route::get('/', [AdminMain::class, 'index'])->name('main-admin');

    Route::get('/news', [AdminNews::class, 'index'])->name('admin-news');
    Route::get('/page-add-new', [AdminNews::class, 'create'])->name('admin-page-add-new');
    Route::post('/create-new', [AdminNews::class, 'store'])->name('admin-create-new');

    Route::get('/categories', [AdminCategories::class, 'index'])->name('admin-categories');
    Route::get('/add-categories', [AdminCategories::class, 'addNewPage'])->name('admin-add-category');
    Route::get('/create-categories', [AdminCategories::class, 'store'])->name('admin-create-category');

    Route::get('/users', AdminUsers::class)->name('users');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/person-area', [PersonArea::class, 'index'])->name('person-area');
    Route::post('/person-area-add-resource', [PersonArea::class, 'store'])->name('person-area-add-resource');
    Route::get('/reviews/add', [AppReviews::class, 'index'])->name('reviews');
    Route::post('/reviews', [AppReviews::class, 'store'])->name('add-reviews');
    Route::get('/categories', [NCC::class, 'index'])->name('categories');
    Route::get('/categories/{id}', [NC::class, 'showCategoryById'])->name('categoriesId');
    Route::get('/new/{id}', [NC::class, 'showNewById'])->name('newId');
    Route::get('/', [AboutUs::class, 'index'])->name('root');

});
