<?php

namespace App\Http\Controllers;

class NewsCategorysController extends Controller
{
    public function index()
    {
        return view('categories/index', ['categoriesList' => $this->categoriesList]);
    }
}
