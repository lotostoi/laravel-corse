<?php

namespace App\Http\Controllers\app;

use App\Models\NewCategory;
use App\Http\Controllers\Controller;

class NewsCategorysController extends Controller
{
    public function index()
    {
        $categories = new NewCategory();

        return view('app.categories', [
            'categoriesList' => $categories->getcategories(),
            'background' => 'assets/img/bg-categories.jpg',
            'title' => 'news categoties',
        ]);
    }
}
