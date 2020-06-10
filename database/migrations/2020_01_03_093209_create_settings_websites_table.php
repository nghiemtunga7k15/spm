<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_websites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('avatar', 500);
            $table->string('description', 500);
            $table->string('link_facebook', 500);
            $table->string('link_messenger', 500);
            $table->string('link_zalo', 500);
            $table->string('link_group_facebook', 500);
            $table->string('image_slide', 500);
            $table->string('address', 500);
            $table->string('hotline', 255);
            $table->string('email', 500);
            $table->Integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_websites');
    }
}
