<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdviceColumnsToItemsPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('advice_h2_1')->nullable();
            $table->text('advice_description_1')->nullable();
            $table->string('advice_img')->nullable();
            $table->string('advice_img_600')->nullable();
            $table->string('advice_img_400')->nullable();
            $table->string('advice_img_alt')->nullable();
            $table->text('advice_h3_1')->nullable();
            $table->text('advice_h3_2')->nullable();
            $table->text('advice_h3_3')->nullable();
            $table->text('advice_h3_4')->nullable();
            $table->text('advice_p_1')->nullable();
            $table->text('advice_p_2')->nullable();
            $table->text('advice_p_3')->nullable();
            $table->text('advice_p_4')->nullable();
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
            $table->dropColumn('advice_h2_1');
            $table->dropColumn('advice_description_1');
            $table->dropColumn('advice_img');
            $table->dropColumn('advice_img_600');
            $table->dropColumn('advice_img_400');
            $table->dropColumn('advice_img_alt');
            $table->dropColumn('advice_h3_1');
            $table->dropColumn('advice_h3_2');
            $table->dropColumn('advice_h3_3');
            $table->dropColumn('advice_h3_4');
            $table->dropColumn('advice_p_1');
            $table->dropColumn('advice_p_2');
            $table->dropColumn('advice_p_3');
            $table->dropColumn('advice_p_4');
        });
    }
}
