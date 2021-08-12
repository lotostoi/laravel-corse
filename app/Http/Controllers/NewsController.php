<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news/default', ['newsList' => $this->newsList]);
    }

    public function shownewById(Request $request, $id)
    {
        $n = [];
        foreach ($this->newsList as $new) {


            if (strval($new['id']) === strval($id)) {
                $n = $new;
            }
        }

        return view('app/one', ['new' => $n, 'title' =>'Current new']);
    }

    public function showCategoryById(Request $request, $id)
    {
        $newsList = [];

        $category = '';

        foreach ($this->categoriesList as $cat) {
            if (strval($cat['id']) === $id) {
                $category = $cat;
            }

        }

        foreach ($this->newsList as $new) {

            if (strval($new['categoryId']) === strval($id)) {
                $newsList[] = $new;
            }
        }
        return view('app/news-list', [
            'newsList' => $newsList,
            'category' => $category,
        ]);
    }
}
