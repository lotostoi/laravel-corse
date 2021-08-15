<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    use HasFactory;

    protected $table = 'news-categories';

    public function getcategories()
    {
        return \DB::table($this->table)->get();
    }
    public function getAllId()
    {
        return \DB::table($this->table)->select('id')->get();
    }
}
