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
        Schema::create('property_metas', function (Blueprint $table) {
            $table->id();
            $table->string('metas_property_sfid')->nullable();
            $table->text('metas_property_details')->nullable();
            $table->string('metas_rooms')->nullable();
            $table->text('metas_orlist')->nullable();
            $table->string('metas_short_lease')->nullable();
            $table->text('metas_neg_quote')->nullable();
            $table->string('metas_pool')->nullable();
            $table->text('metas_description')->nullable();
            $table->string('metas_canonical')->nullable();
            $table->text('metas_decoration_str')->nullable();
            $table->text('metas_search_keywords')->nullable();
            $table->text('metas_sqm')->nullable();
            $table->text('metas_all_property_features')->nullable();
            $table->text('metas_meta_description')->nullable();
            $table->text('metas_propertyShortSummary')->nullable();
            $table->text('metas_furnished_str')->nullable();
            $table->text('metas_propertySummary')->nullable();
            $table->string('metas_sqft')->nullable();
            $table->string('metas_newDate')->nullable();
            $table->string('metas_buyType')->nullable();
            $table->string('metas_strapline')->nullable();
            $table->text('metas_property_statustenure')->nullable();
            $table->text('metas_tenure')->nullable();
            $table->text('metas_situation')->nullable();
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
        Schema::dropIfExists('property_metas');
    }
};
