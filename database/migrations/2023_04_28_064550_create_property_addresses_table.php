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
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_property_sfid');
            $table->string('address_country')->nullable();
            $table->string('address_lng')->nullable();
            $table->string('address_town')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_countrycode')->nullable();
            $table->string('address_county')->nullable();
            $table->text('address_sectorName')->nullable();
            $table->string('address_cTaxYear')->nullable();
            $table->string('address_os_town_city')->nullable();
            $table->string('address_propertyReference')->nullable();
            $table->string('address_council')->nullable();
            $table->text('address_displayAddress')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_outcode')->nullable();
            $table->string('address_cTaxPrice')->nullable();
            $table->string('address_full_postcode')->nullable();
            $table->string('address_state')->nullable();
            $table->string('address_outcodeName')->nullable();
            $table->string('address_village')->nullable();
            $table->string('address_cTaxBand')->nullable();
            $table->string('address_sector')->nullable();
            $table->string('address_lat')->nullable();
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
        Schema::dropIfExists('property_addresses');
    }
};
