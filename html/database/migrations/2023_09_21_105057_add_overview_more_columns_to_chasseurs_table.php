<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOverviewMoreColumnsToChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->text('overview_h3_4')->nullable()->after('overview_h3_3');
            $table->text('overview_h3_5')->nullable()->after('overview_h3_4');
            $table->text('overview_h3_6')->nullable()->after('overview_h3_5');
            $table->text('overview_h3_7')->nullable()->after('overview_h3_6');
            $table->text('overview_h3_8')->nullable()->after('overview_h3_7');
            $table->text('overview_h3_9')->nullable()->after('overview_h3_8');
            $table->text('overview_h3_10')->nullable()->after('overview_h3_9');
            $table->text('overview_h3_11')->nullable()->after('overview_h3_10');
            $table->text('overview_h3_12')->nullable()->after('overview_h3_11');
            $table->text('overview_h3_13')->nullable()->after('overview_h3_12');
            $table->text('overview_h3_14')->nullable()->after('overview_h3_13');
            $table->text('overview_p_4')->nullable()->after('overview_p_3');
            $table->text('overview_p_5')->nullable()->after('overview_p_4');
            $table->text('overview_p_6')->nullable()->after('overview_p_5');
            $table->text('overview_p_7')->nullable()->after('overview_p_6');
            $table->text('overview_p_8')->nullable()->after('overview_p_7');
            $table->text('overview_p_9')->nullable()->after('overview_p_8');
            $table->text('overview_p_10')->nullable()->after('overview_p_9');
            $table->text('overview_p_11')->nullable()->after('overview_p_10');
            $table->text('overview_p_12')->nullable()->after('overview_p_11');
            $table->text('overview_p_13')->nullable()->after('overview_p_12');
            $table->text('overview_p_14')->nullable()->after('overview_p_13');
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
            $table->dropColumn('overview_h3_4');
            $table->dropColumn('overview_h3_5');
            $table->dropColumn('overview_h3_6');
            $table->dropColumn('overview_h3_7');
            $table->dropColumn('overview_h3_8');
            $table->dropColumn('overview_h3_9');
            $table->dropColumn('overview_h3_10');
            $table->dropColumn('overview_h3_11');
            $table->dropColumn('overview_h3_12');
            $table->dropColumn('overview_h3_13');
            $table->dropColumn('overview_h3_14');
            $table->dropColumn('overview_p_4');
            $table->dropColumn('overview_p_5');
            $table->dropColumn('overview_p_6');
            $table->dropColumn('overview_p_7');
            $table->dropColumn('overview_p_8');
            $table->dropColumn('overview_p_9');
            $table->dropColumn('overview_p_10');
            $table->dropColumn('overview_p_11');
            $table->dropColumn('overview_p_12');
            $table->dropColumn('overview_p_13');
            $table->dropColumn('overview_p_14');
        });
    }
}
