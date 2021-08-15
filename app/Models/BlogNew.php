<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogNew extends Model
{
    use HasFactory;

    protected $table = 'news';

    // get all news
    public function getNews()
    {
        return \DB::table($this->table)->get();
    }

    // get id's list
    public function getAllId()
    {
        return \DB::table($this->table)->select('id')->get();
    }

    // get by id
    public function getOneById($id)
    {

        $news = \DB::table('conections-news-and-categories')
            ->join('news', function ($join) use ($id) {
                $join->on('news.id', '=', 'conections-news-and-categories.new_id')
                    ->where('conections-news-and-categories.new_id', $id);
            })
            ->join('news-categories', 'news-categories.id', '=', 'conections-news-and-categories.new_category_id')
            ->select('news.title as newsTitle', 'news.img as newsImg', 'news.content as newsText', 'news-categories.id as newCategoryId', 'news-categories.title as newCategoryTitle')
            ->get();

        $categories = $news->map(function ($new) {
            return [
                'id' => $new->newCategoryId,
                'title' => $new->newCategoryTitle,
            ];
        })->toArray();

        return [
            'categories' => $categories,
            'news' => [
                'title' => $news->toArray()[0]->newsTitle,
                'text' => $news->toArray()[0]->newsText,
                'img' => $news->toArray()[0]->newsImg,
            ],
        ];

    }

    // get list news by categoryId
    public function getAllByCategoryId($id)
    {
        return \DB::table('conections-news-and-categories')
            ->join('news-categories', function ($join) use ($id) {
                $join->on('news-categories.id', '=', 'conections-news-and-categories.new_category_id')
                    ->where('conections-news-and-categories.new_category_id', $id);
            })
            ->join('news', 'news.id', '=', 'conections-news-and-categories.new_id')
            ->select('news.id as newId', 'news.title as newTitle', 'news.img as newImg', 'news-categories.title as newCategoryTitle', 'news-categories.img as newCategoryImg')
            ->get();
    }

    // get number of rundom news

    public function getRandomNews($number = 3)
    {

        $allNews = $this->getNews();

        return $allNews->random($number)->all();

    }
}
