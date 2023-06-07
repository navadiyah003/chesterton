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
        Schema::create('global_network_integrateds', function (Blueprint $table) {
            $table->id();
            $table->string('global_network_country');
            $table->string('global_network_integrate_title');
            $table->text('global_network_integrate_description');
            $table->string('global_network_integrate_image');
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
        Schema::dropIfExists('global_network_integrateds');
    }
};
