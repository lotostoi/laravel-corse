<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news/index', ['newsList' => $this->newsList]);
    }

    public function shownewById(Request $request, $id)
    {
        $n = [];

        foreach ($this->newsList as $new) {


            if (strval($new['id']) === strval($id)) {
                $n = $new;
            }
        }

        return view('news/one', ['new' => $n]);
    }

    public function showCategoryById(Request $request, $id)
    {
        $newsList = [];

        $categoryName = '';

        foreach ($this->categoriesList as $cat) {
            if (strval($cat['id']) === $id) {
                $categoryName = $cat['title'];
            }

        }

        foreach ($this->newsList as $new) {

            if (strval($new['categoryId']) === strval($id)) {
                $newsList[] = $new;
            }
        }
        return view('news/index', [
            'newsList' => $newsList,
            'categoryName' => $categoryName,
        ]);
    }
}
