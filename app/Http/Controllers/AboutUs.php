<?php

namespace App\Http\Controllers;

class AboutUs extends Controller
{
    //index
    public function index()
    {
        return view('app.index', [
            'background' => 'assets/img/bg-index.jpg',
            'news' => $this->newsList,
            'title' => 'News blog',
        ]);
    }
}
