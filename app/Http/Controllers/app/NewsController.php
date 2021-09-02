<?php

namespace App\Http\Controllers\app;

use App\Models\BlogNew;
use App\Models\ConectionNewAndCategories;
use App\Models\NewCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('news/default', ['newsList' => (new BlogNew())->getNews()]);
    }

    public function shownewById(Request $request, $id)
    {
        $n = BlogNew::find($id);
        return view('app/one', [
            'new' => $n,
            'categories' => $n->categories()->get(),
        ]);
    }

    public function showCategoryById(Request $request, $id)
    {

        $category =  NewCategory::find($id);

        return view('app/news-list', [
            'newsList' => $category->news()->get(),
            'category' => [
                'title' => $category->title,
                'img' => $category->img,
            ],
        ]);
    }
}
