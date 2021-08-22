<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    use HasFactory;

    protected $table = 'news-categories';

    public function news()
    {
        return $this
            ->belongsToMany(BlogNew::class, 'conections-news-and-categories', 'new_category_id', 'new_id')
            ->using(ConectionNewAndCategories::class);
    }

}
