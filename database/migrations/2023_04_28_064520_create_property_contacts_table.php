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
        Schema::create('property_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_property_sfid');
            $table->string('contact_officeName')->nullable();
            $table->string('contact_officeLng')->nullable();
            $table->string('contact_officeImg')->nullable();
            $table->string('contact_webTel')->nullable();
            $table->string('contact_shortOfficeName')->nullable();
            $table->text('contact_officeAddress')->nullable();
            $table->text('contact_officeEmail')->nullable();
            $table->string('contact_officeLat')->nullable();
            $table->text('contact_offcode')->nullable();
            $table->text('contact_officeManager')->nullable();
            $table->string('contact_officeID')->nullable();
            $table->string('contact_officeURL')->nullable();
            $table->string('contact_portalEmail')->nullable();
            $table->text('contact_officeManagerID')->nullable();
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
        Schema::dropIfExists('property_contacts');
    }
};
