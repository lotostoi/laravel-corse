<?php

namespace App\Http\Controllers;

class NewsCategorysController extends Controller
{
    public function index()
    {
        return view('app.categories', [
            'categoriesList' => $this->categoriesList,
            'background' => 'assets/img/bg-categories.jpg',
            'title' => 'news categoties',
        ]);
    }
}
