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
        Schema::create('property_prices', function (Blueprint $table) {
            $table->id();
            $table->string('price_property_sfid')->nullable();
            $table->string('price_property_price')->nullable();
            $table->string('price_property_price_gbp')->nullable();
            $table->string('price_property_currency_symbol')->nullable();
            $table->text('price_displaySoldDetails')->nullable();
            $table->string('price_sale_price_gbp')->nullable();
            $table->string('price_displayPrice')->nullable();
            $table->string('price_displayQualifier')->nullable();
            $table->string('price_currency')->nullable();
            $table->string('price_property_currency')->nullable();
            $table->string('price_sale_price')->nullable();
            $table->text('price_trxDate')->nullable();
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
        Schema::dropIfExists('property_prices');
    }
};
