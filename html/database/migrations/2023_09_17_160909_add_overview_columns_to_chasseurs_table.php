<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOverviewColumnsToChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->string('overview_h2')->nullable();
            $table->string('overview_description')->nullable();
            $table->text('overview_h3_1')->nullable();
            $table->text('overview_h3_2')->nullable();
            $table->text('overview_h3_3')->nullable();
            $table->text('overview_p_1')->nullable();
            $table->text('overview_p_2')->nullable();
            $table->text('overview_p_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->dropColumn('overview_h2');
            $table->dropColumn('overview_description');
            $table->dropColumn('overview_h3_1');
            $table->dropColumn('overview_h3_2');
            $table->dropColumn('overview_h3_3');
            $table->dropColumn('overview_p_1');
            $table->dropColumn('overview_p_2');
            $table->dropColumn('overview_p_3');
        });
    }
}
