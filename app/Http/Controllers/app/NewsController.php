<?php

namespace App\Http\Controllers\app;

use App\Models\BlogNew;
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
        $n = (new BlogNew())->getOneById($id);
        return view('app/one', [
            'new' => $n['news'],
            'categories' => $n['categories'],
        ]);
    }

    public function showCategoryById(Request $request, $id)
    {

        $newsList = (new BlogNew())->getAllByCategoryId($id);

        return view('app/news-list', [
            'newsList' => $newsList,
            'category' => [
                'title' => $newsList->toArray()[1]->newCategoryTitle,
                'img' => $newsList->toArray()[1]->newCategoryImg,
            ],
        ]);
    }
}
