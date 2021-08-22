<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogNew extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = ['id', 'title', 'content', 'img'];

    public function categories()
    {

        return $this
            ->belongsToMany(NewCategory::class, 'conections-news-and-categories', 'new_id', 'new_category_id')
            ->using(ConectionNewAndCategories::class);
    }

}
