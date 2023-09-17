<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSupplyColumnsToChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->string('supply_img_1', 255)->nullable();
            $table->string('supply_img_1_600', 255)->nullable();
            $table->string('supply_img_1_400', 255)->nullable();
            $table->string('supply_img_1_alt', 255)->nullable();
            $table->string('supply_img_2', 255)->nullable();
            $table->string('supply_img_2_600', 255)->nullable();
            $table->string('supply_img_2_400', 255)->nullable();
            $table->string('supply_img_2_alt', 255)->nullable();
            $table->string('supply_img_3', 255)->nullable();
            $table->string('supply_img_3_600', 255)->nullable();
            $table->string('supply_img_3_400', 255)->nullable();
            $table->string('supply_img_3_alt', 255)->nullable();
            $table->string('supply_img_4', 255)->nullable();
            $table->string('supply_img_4_600', 255)->nullable();
            $table->string('supply_img_4_400', 255)->nullable();
            $table->string('supply_img_4_alt', 255)->nullable();
            $table->text('supply_h2_1', 12000)->nullable();
            $table->text('supply_h2_2', 12000)->nullable();
            $table->text('supply_h2_3', 12000)->nullable();
            $table->text('supply_h2_4', 12000)->nullable();
            $table->text('supply_p_1', 12000)->nullable();
            $table->text('supply_p_2', 12000)->nullable();
            $table->text('supply_p_3', 12000)->nullable();
            $table->text('supply_p_4', 12000)->nullable();
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
            $table->dropColumn('supply_img_1');
            $table->dropColumn('supply_img_1_600');
            $table->dropColumn('supply_img_1_400');
            $table->dropColumn('supply_img_1_alt');
            $table->dropColumn('supply_img_2');
            $table->dropColumn('supply_img_2_600');
            $table->dropColumn('supply_img_2_400');
            $table->dropColumn('supply_img_2_alt');
            $table->dropColumn('supply_img_3');
            $table->dropColumn('supply_img_3_600');
            $table->dropColumn('supply_img_3_400');
            $table->dropColumn('supply_img_3_alt');
            $table->dropColumn('supply_img_4');
            $table->dropColumn('supply_img_4_600');
            $table->dropColumn('supply_img_4_400');
            $table->dropColumn('supply_img_4_alt');
            $table->dropColumn('supply_h2_1');
            $table->dropColumn('supply_h2_2');
            $table->dropColumn('supply_h2_3');
            $table->dropColumn('supply_h2_4');
            $table->dropColumn('supply_p_1');
            $table->dropColumn('supply_p_2');
            $table->dropColumn('supply_p_3');
            $table->dropColumn('supply_p_4');
        });
    }
}
