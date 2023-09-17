<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatisticsColumnsToChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->string('statistics_h2_1')->nullable();
            $table->string('statistics_h2_2')->nullable();
            $table->text('statistics_h3_1')->nullable();
            $table->text('statistics_h3_2')->nullable();
            $table->text('statistics_h3_3')->nullable();
            $table->text('statistics_h3_4')->nullable();
            $table->text('statistics_p_1')->nullable();
            $table->text('statistics_p_2')->nullable();
            $table->text('statistics_p_3')->nullable();
            $table->text('statistics_p_4')->nullable();
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
            $table->dropColumn('statistics_h2_1');
            $table->dropColumn('statistics_h2_2');
            $table->dropColumn('statistics_h3_1');
            $table->dropColumn('statistics_h3_2');
            $table->dropColumn('statistics_h3_3');
            $table->dropColumn('statistics_h3_4');
            $table->dropColumn('statistics_p_1');
            $table->dropColumn('statistics_p_2');
            $table->dropColumn('statistics_p_3');
            $table->dropColumn('statistics_p_4');
        });
    }
}
