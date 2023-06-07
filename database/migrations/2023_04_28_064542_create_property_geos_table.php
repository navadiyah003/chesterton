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
        Schema::create('property_geos', function (Blueprint $table) {
            $table->id();
            $table->string('geos_property_sfid');
            $table->text('geos_ptown')->nullable();
            $table->string('geos_displayStreet')->nullable();
            $table->string('geos_geonameid')->nullable();
            $table->string('geos_pcounty')->nullable();
            $table->string('geos_displayName')->nullable();
            $table->string('geos_pdistrict')->nullable();
            $table->string('geos_streetKey')->nullable();
            $table->text('geos_pstate')->nullable();
            $table->text('geos_searchKey')->nullable();
            $table->string('geos_shortName')->nullable();
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
        Schema::dropIfExists('property_geos');
    }
};
