<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConectionsNewsAndcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conections-news-and-categories', function (Blueprint $table) {
            $table->unsignedBigInteger('new_id');
            $table->foreign('new_id')->references('id')->on('news');
            $table->unsignedBigInteger('new_category_id');
            $table->foreign('new_category_id')->references('id')->on('news-categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conections-news-and-categories');
    }
}
