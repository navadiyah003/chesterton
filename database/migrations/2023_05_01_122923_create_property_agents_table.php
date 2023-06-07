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
        Schema::create('property_agents', function (Blueprint $table) {
            $table->id();
            $table->string('agent_property_sfid');
            $table->string('agent_sfid')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('agent_profilePicture')->nullable();
            $table->string('agent_mobileNumber')->nullable();
            $table->string('agent_email')->nullable();
            $table->string('agent_description')->nullable();
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
        Schema::dropIfExists('property_agents');
    }
};
