<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdviceColumnsToChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->string('advice_img')->nullable();
            $table->string('advice_img_600')->nullable();
            $table->string('advice_img_400')->nullable();
            $table->string('advice_img_alt')->nullable();
            $table->string('advice_h2_1', 300)->nullable();
            $table->string('advice_h2_2', 300)->nullable();
            $table->string('advice_description_1', 1000)->nullable();
            $table->string('advice_description_2', 1000)->nullable();
            $table->text('advice_h3_1', 300)->nullable();
            $table->text('advice_h3_2', 300)->nullable();
            $table->text('advice_h3_3', 300)->nullable();
            $table->text('advice_h3_4', 300)->nullable();
            $table->text('advice_h3_5', 300)->nullable();
            $table->text('advice_h3_6', 300)->nullable();
            $table->text('advice_p_1', 5000)->nullable();
            $table->text('advice_p_2', 5000)->nullable();
            $table->text('advice_p_3', 5000)->nullable();
            $table->text('advice_p_4', 5000)->nullable();
            $table->text('advice_p_5', 5000)->nullable();
            $table->text('advice_p_6', 5000)->nullable();
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
            $table->dropColumn('advice_img');
            $table->dropColumn('advice_img_600');
            $table->dropColumn('advice_img_400');
            $table->dropColumn('advice_img_alt');
            $table->dropColumn('advice_h2_1');
            $table->dropColumn('advice_h2_2');
            $table->dropColumn('advice_description_1');
            $table->dropColumn('advice_description_2');
            $table->dropColumn('advice_h3_1');
            $table->dropColumn('advice_h3_2');
            $table->dropColumn('advice_h3_3');
            $table->dropColumn('advice_h3_4');
            $table->dropColumn('advice_h3_5');
            $table->dropColumn('advice_h3_6');
            $table->dropColumn('advice_p_1');
            $table->dropColumn('advice_p_2');
            $table->dropColumn('advice_p_3');
            $table->dropColumn('advice_p_4');
            $table->dropColumn('advice_p_5');
            $table->dropColumn('advice_p_6');
        });
    }
}
