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
        Schema::create('region_wise_countries', function (Blueprint $table) {
            $table->id();
            $table->text('asia')->nullable();
            $table->text('caribbean')->nullable();
            $table->text('europe')->nullable();
            $table->text('mena')->nullable();
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
        Schema::dropIfExists('region_wise_countries');
    }
};
