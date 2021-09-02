<?php

namespace App\Http\Controllers\app;

use App\Models\NewCategory;
use App\Http\Controllers\Controller;

class NewsCategorysController extends Controller
{
    public function index()
    {

        return view('app.categories', [
            'categoriesList' => NewCategory::all(),
            'background' => 'assets/img/bg-categories.jpg',
            'title' => 'news categoties',
        ]);
    }
}
