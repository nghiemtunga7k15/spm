<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rename extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('categories_post', 'post_categories');
        Schema::rename('tags_post', 'post_tags');
        Schema::rename('categories_product', 'product_categories');
        Schema::rename('features_title', 'product_features_title');
        Schema::rename('features_description', 'product_features_description');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('post_categories', 'categories_post');
        Schema::rename('post_tags', 'tags_post');
        Schema::rename('product_categories', 'categories_product');
        Schema::rename('product_features_title','features_title');
        Schema::rename('product_features_description', 'features_description');
    }
}
