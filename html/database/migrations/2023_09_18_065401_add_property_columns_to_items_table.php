<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPropertyColumnsToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->text('property_h2_1')->nullable();
            $table->text('property_h2_2')->nullable();
            $table->text('property_h2_3')->nullable();
            $table->text('property_h2_4')->nullable();
            $table->text('property_h2_5')->nullable();
            $table->text('property_p_1')->nullable();
            $table->text('property_p_2')->nullable();
            $table->text('property_p_3')->nullable();
            $table->text('property_p_4')->nullable();
            $table->text('property_p_5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('property_h2_1');
            $table->dropColumn('property_h2_2');
            $table->dropColumn('property_h2_3');
            $table->dropColumn('property_h2_4');
            $table->dropColumn('property_h2_5');
            $table->dropColumn('property_p_1');
            $table->dropColumn('property_p_2');
            $table->dropColumn('property_p_3');
            $table->dropColumn('property_p_4');
            $table->dropColumn('property_p_5');
        });
    }
}
