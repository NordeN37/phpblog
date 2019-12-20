<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeingUserTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->bigInteger('posts_id')->unsigned()->index();
            $table->foreign('posts_id')->references('id')->on('posts')->onDelete('cascade');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('posts_id')->unsigned()->nullable();
            $table->foreign('posts_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('categories_id')->unsigned()->nullable();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('tags_id')->unsigned()->nullable();
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
            $table->bigInteger('comments_id')->unsigned()->nullable();
            $table->foreign('comments_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
