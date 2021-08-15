<?php

namespace App\Http\Controllers\app;
use App\Http\Controllers\Controller;
use App\Models\BlogNew;

class AboutUs extends Controller
{
    //index
    public function index()
    {
        return view('app.index', [
            'background' => 'assets/img/bg-index.jpg',
            'news' => (new BlogNew())->getRandomNews(),
            'title' => 'News blog',
        ]);
    }
}
