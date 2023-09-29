<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToImmoNeufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immo_neufs', function (Blueprint $table) {
            $table->string('hunter_img')->nullable();
            $table->string('hunter_img_600')->nullable();
            $table->string('hunter_img_400')->nullable();
            $table->string('hunter_img_alt')->nullable();
            $table->string('hunter_h1')->nullable();
            $table->text('hunter_p')->nullable();
            $table->string('property_h2_1')->nullable();
            $table->string('property_h2_2')->nullable();
            $table->string('property_h2_3')->nullable();
            $table->text('property_p_1')->nullable();
            $table->text('property_p_2')->nullable();
            $table->text('property_p_3')->nullable();

            $table->string('supply_img_1')->nullable();
            $table->string('supply_img_600_1')->nullable();
            $table->string('supply_img_400_1')->nullable();
            $table->string('supply_img_alt_1')->nullable();
            $table->string('supply_img_2')->nullable();
            $table->string('supply_img_600_2')->nullable();
            $table->string('supply_img_400_2')->nullable();
            $table->string('supply_img_alt_2')->nullable();
            $table->string('supply_img_3')->nullable();
            $table->string('supply_img_600_3')->nullable();
            $table->string('supply_img_400_3')->nullable();
            $table->string('supply_img_alt_3')->nullable();
            $table->string('supply_img_4')->nullable();
            $table->string('supply_img_600_4')->nullable();
            $table->string('supply_img_400_4')->nullable();
            $table->string('supply_img_alt_4')->nullable();
            $table->string('supply_img_5')->nullable();
            $table->string('supply_img_600_5')->nullable();
            $table->string('supply_img_400_5')->nullable();
            $table->string('supply_img_alt_5')->nullable();
            $table->string('supply_img_6')->nullable();
            $table->string('supply_img_600_6')->nullable();
            $table->string('supply_img_400_6')->nullable();
            $table->string('supply_img_alt_6')->nullable();
            $table->text('supply_h2_1')->nullable();
            $table->text('supply_h2_2')->nullable();
            $table->text('supply_h2_3')->nullable();
            $table->text('supply_h2_4')->nullable();
            $table->text('supply_h2_5')->nullable();
            $table->text('supply_h2_6')->nullable();
            $table->text('supply_p_1')->nullable();
            $table->text('supply_p_2')->nullable();
            $table->text('supply_p_3')->nullable();
            $table->text('supply_p_4')->nullable();
            $table->text('supply_p_5')->nullable();
            $table->text('supply_p_6')->nullable();

            $table->string('bank_h2')->nullable();
            $table->text('bank_description')->nullable();
            $table->text('bank_h3_1')->nullable();
            $table->text('bank_h3_2')->nullable();
            $table->text('bank_h3_3')->nullable();
            $table->text('bank_p_1')->nullable();
            $table->text('bank_p_2')->nullable();
            $table->text('bank_p_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('immo_neufs', function (Blueprint $table) {
            $table->dropColumn('hunter_img');
            $table->dropColumn('hunter_img_600');
            $table->dropColumn('hunter_img_400');
            $table->dropColumn('hunter_img_alt');
            $table->dropColumn('hunter_h1');
            $table->dropColumn('hunter_p');
            $table->dropColumn('property_h2_1');
            $table->dropColumn('property_h2_2');
            $table->dropColumn('property_h2_3');
            $table->dropColumn('property_p_1');
            $table->dropColumn('property_p_2');
            $table->dropColumn('property_p_3');

            $table->dropColumn('supply_img_1');
            $table->dropColumn('supply_img_600_1');
            $table->dropColumn('supply_img_400_1');
            $table->dropColumn('supply_img_alt_1');
            $table->dropColumn('supply_img_2');
            $table->dropColumn('supply_img_600_2');
            $table->dropColumn('supply_img_400_2');
            $table->dropColumn('supply_img_alt_2');
            $table->dropColumn('supply_img_3');
            $table->dropColumn('supply_img_600_3');
            $table->dropColumn('supply_img_400_3');
            $table->dropColumn('supply_img_alt_3');
            $table->dropColumn('supply_img_4');
            $table->dropColumn('supply_img_600_4');
            $table->dropColumn('supply_img_400_4');
            $table->dropColumn('supply_img_alt_4');
            $table->dropColumn('supply_img_5');
            $table->dropColumn('supply_img_600_5');
            $table->dropColumn('supply_img_400_5');
            $table->dropColumn('supply_img_alt_5');
            $table->dropColumn('supply_img_6');
            $table->dropColumn('supply_img_600_6');
            $table->dropColumn('supply_img_400_6');
            $table->dropColumn('supply_img_alt_6');
            $table->dropColumn('supply_h2_1');
            $table->dropColumn('supply_h2_2');
            $table->dropColumn('supply_h2_3');
            $table->dropColumn('supply_h2_4');
            $table->dropColumn('supply_h2_5');
            $table->dropColumn('supply_h2_6');
            $table->dropColumn('supply_p_1');
            $table->dropColumn('supply_p_2');
            $table->dropColumn('supply_p_3');
            $table->dropColumn('supply_p_4');
            $table->dropColumn('supply_p_5');
            $table->dropColumn('supply_p_6');

            $table->dropColumn('bank_h2');
            $table->dropColumn('bank_description');
            $table->dropColumn('bank_h3_1');
            $table->dropColumn('bank_h3_2');
            $table->dropColumn('bank_h3_3');
            $table->dropColumn('bank_p_1');
            $table->dropColumn('bank_p_2');
            $table->dropColumn('bank_p_3');
        });
    }
}
