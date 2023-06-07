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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('sfid');
            $table->string('propertyName')->nullable();
            $table->string('propertyType')->nullable();
            $table->string('shortDescription')->nullable();
            $table->string('longDescription')->nullable();
            $table->string('images')->nullable();
            $table->integer('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('askingPriceFlag')->nullable();
            $table->string('dateTimeAdded')->nullable();
            $table->string('uniqueIdentifier')->nullable();
            $table->string('unit')->nullable();
            $table->string('unitStreetName')->nullable();
            $table->string('featured')->nullable();
            $table->string('saleRentType')->nullable();
            $table->string('type')->nullable();
            $table->string('rentalType')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('diningRooms')->nullable();
            $table->integer('livingRooms')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('areaLocationTitle')->nullable();
            $table->string('areaLocationDescription')->nullable();
            $table->integer('locationMapLat')->nullable();
            $table->integer('locationMapLon')->nullable();
            $table->integer('propertyLat')->nullable();
            $table->integer('propertyLon')->nullable();
            $table->integer('coveredArea')->nullable();
            $table->string('measureUnit')->nullable();
            $table->string('lifeStyle')->nullable();
            $table->string('amenities')->nullable();
            $table->string('dataSource')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
