<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugColumnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('short_describe')->after('description')->nullable();
            $table->string('price')->after('feature')->nullable();
            $table->integer('product_quick_view')->after('product_view')->nullable();
            $table->string('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['short_describe']);
            $table->dropColumn(['price']);
            $table->dropColumn(['product_quick_view']);
            $table->dropColumn(['note']);
        });
    }
}
