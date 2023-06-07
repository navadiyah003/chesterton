<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_networks', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image');
            $table->string('banner_title');
            $table->string('short_desc');
            $table->text('long_desc');
            $table->text('web_link_content');
            $table->string('web_link');
            $table->string('office_address');
            $table->string('office_phone');
            $table->string('office_email');
            $table->string('popular_city_content');
            $table->string('popular_city_image');
            $table->string('image_slide');
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
        Schema::dropIfExists('global_networks');
    }
};