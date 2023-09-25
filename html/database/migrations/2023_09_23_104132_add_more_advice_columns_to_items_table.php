<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreAdviceColumnsToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->text('advice_h3_5')->nullable()->after('advice_h3_4');
            $table->text('advice_h3_6')->nullable()->after('advice_h3_5');
            $table->text('advice_h3_7')->nullable()->after('advice_h3_6');
            $table->text('advice_h3_8')->nullable()->after('advice_h3_7');
            $table->text('advice_h3_9')->nullable()->after('advice_h3_8');
            $table->text('advice_h3_10')->nullable()->after('advice_h3_9');
            $table->text('advice_p_5')->nullable()->after('advice_p_4');
            $table->text('advice_p_6')->nullable()->after('advice_p_5');
            $table->text('advice_p_7')->nullable()->after('advice_p_6');
            $table->text('advice_p_8')->nullable()->after('advice_p_7');
            $table->text('advice_p_9')->nullable()->after('advice_p_8');
            $table->text('advice_p_10')->nullable()->after('advice_p_9');
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
            $table->dropColumn('advice_h3_5');
            $table->dropColumn('advice_h3_6');
            $table->dropColumn('advice_h3_7');
            $table->dropColumn('advice_h3_8');
            $table->dropColumn('advice_h3_9');
            $table->dropColumn('advice_h3_10');
            $table->dropColumn('advice_p_5');
            $table->dropColumn('advice_p_6');
            $table->dropColumn('advice_p_7');
            $table->dropColumn('advice_p_8');
            $table->dropColumn('advice_p_9');
            $table->dropColumn('advice_p_10');
        });
    }
}
