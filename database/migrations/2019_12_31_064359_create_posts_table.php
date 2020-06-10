<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->longText('content');
            $table->string('image');
            $table->Integer('post_view');
            $table->Integer('category_id');
            $table->Integer('post_share');
            $table->Integer('comment_count');
            $table->string('post_file');
            $table->Integer('post_status');
            $table->dateTime('post_time');
            $table->string('note');
            $table->string('post_link');
            $table->Integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
